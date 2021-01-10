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

Route::get('Register/view',[App\Http\Controllers\AuthenticationController::class,'registerView']);
Route::post('Register',[App\Http\Controllers\AuthenticationController::class,'register']);
Route::post('verifyotp',[App\Http\Controllers\AuthenticationController::class,'verifyotp']);
Route::post('verifyemail',[App\Http\Controllers\AuthenticationController::class,'verifyemail']);

Route::post('Login',[App\Http\Controllers\AuthenticationController::class,'login']);
Route::post('/reset',[App\Http\Controllers\AuthenticationController::class,'passwordReset']);

Route::group(['middleware'=>'jwt.auth'],function(){
    Route::post('GetUser',[App\Http\Controllers\AuthenticationController::class,'jwtdecode']);
    Route::post('Logout',[App\Http\Controllers\AuthenticationController::class,'logout']);
});


Route::get('getcsv',[App\Http\Controllers\AdminController::class,'export']);
Route::post('postcsv',[App\Http\Controllers\AdminController::class,'importCSV']);

Route::get('Adminhome',[App\Http\Controllers\AdminController::class,'home']);
Route::post('Ajaxdata',[\App\Http\Controllers\AdminController::class,'ajaxdata']);
Route::post('Editdata',[\App\Http\Controllers\AdminController::class,'edit']);
Route::post('Deletedata',[\App\Http\Controllers\AdminController::class,'delete']);


Route::get('Usersdata',[App\Http\Controllers\Userscontroller::class,'data']);




