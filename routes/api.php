<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('Register',[App\Http\Controllers\AuthenticationController::class,'register']);
Route::post('verifyotp',[App\Http\Controllers\AuthenticationController::class,'verify']);

Route::group(['middleware'=>'jwt.auth'],function(){
    Route::post('jwttoken',[App\Http\Controllers\AuthenticationController::class,'jwtdecode']);
});


Route::get('getcsv',[App\Http\Controllers\AdminController::class,'export']);
Route::post('postcsv',[App\Http\Controllers\AdminController::class,'importCSV']);

Route::get('adminhome',[App\Http\Controllers\AdminController::class,'home']);


Route::get('reportview',[\App\Http\Controllers\Report::class,'view']);

Route::post('reportview',[\App\Http\Controllers\Report::class,'add']);