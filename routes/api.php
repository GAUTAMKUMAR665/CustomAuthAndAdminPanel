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
Route::post('verify',[App\Http\Controllers\AuthenticationController::class,'verification']);
Route::get('verifyemail',[App\Http\Controllers\AuthenticationController::class,'verifyemail']);

Route::get('Login/view',[App\Http\Controllers\AuthenticationController::class,'loginView']);
Route::post('Login',[App\Http\Controllers\AuthenticationController::class,'login']);
Route::get('forget',[App\Http\Controllers\AuthenticationController::class,'forget']);
Route::post('reset',[App\Http\Controllers\AuthenticationController::class,'passwordReset']);

Route::group(['middleware'=>'jwt.auth'],function(){
    Route::post('GetUser',[App\Http\Controllers\AuthenticationController::class,'jwtdecode']);
    Route::post('Logout',[App\Http\Controllers\AuthenticationController::class,'logout']);
});

############################################################################################################################
Route::get('getcsv',[App\Http\Controllers\AdminController::class,'export']);
Route::post('postcsv',[App\Http\Controllers\AdminController::class,'importCSV']);
Route::get('Adminhome',[App\Http\Controllers\AdminController::class,'home']);
Route::post('Ajaxdata',[\App\Http\Controllers\AdminController::class,'ajaxdata']);
Route::post('Editdata',[\App\Http\Controllers\AdminController::class,'edit']);
Route::post('Deletedata',[\App\Http\Controllers\AdminController::class,'delete']);
############################################################################################################################

Route::get('view/report',[\App\Http\Controllers\Admin\Report::class,'view']);
Route::get('edit/report/{id}',[\App\Http\Controllers\Admin\Report::class,'editform']);
Route::post('edit/report',[\App\Http\Controllers\Admin\Report::class,'edit']);
Route::get('add/report',[\App\Http\Controllers\Admin\Report::class,'addform']);
Route::post('add/reports',[\App\Http\Controllers\Admin\Report::class,'add']);
Route::post('delete/report',[\App\Http\Controllers\Admin\Report::class,'delete']);

#################################################################################################################################
Route::get('view/catogery',[\App\Http\Controllers\Admin\Catogery::class,'view']);
Route::get('edit/catogery/{id}',[\App\Http\Controllers\Admin\Catogery::class,'editform'])->name('edit/catogery');
Route::post('edit/catogery',[\App\Http\Controllers\Admin\Catogery::class,'edit']);
Route::get('add/catogery',[\App\Http\Controllers\Admin\Catogery::class,'addform']);
Route::post('add/catogery',[\App\Http\Controllers\Admin\Catogery::class,'add']);
Route::post('delete/catogery',[\App\Http\Controllers\Admin\Catogery::class,'delete']);

##########################################################################################################################################
Route::get('view/pressrelease',[\App\Http\Controllers\Admin\PressRelese::class,'view']);
Route::get('edit/pressrelease/{id}',[\App\Http\Controllers\Admin\PressRelese::class,'editform'])->name('edit/pressrelese');
Route::post('edit/pressrelease',[\App\Http\Controllers\Admin\PressRelese::class,'edit']);
Route::get('add/pressrelease',[\App\Http\Controllers\Admin\PressRelese::class,'addform']);
Route::post('add/pressrelease',[\App\Http\Controllers\Admin\PressRelese::class,'add']);
Route::post('delete/pressrelease',[\App\Http\Controllers\Admin\PressRelese::class,'delete']);

#####################################################################################################################################
Route::get('view/publiser',[\App\Http\Controllers\Admin\Publisher::class,'view']);
Route::get('edit/publiser/{id}',[\App\Http\Controllers\Admin\Publisher::class,'editform'])->name('edit/publiser');
Route::post('edit/publiser',[\App\Http\Controllers\Admin\Publisher::class,'edit']);
Route::get('add/publiser',[\App\Http\Controllers\Admin\Publisher::class,'addform']);
Route::post('add/publiser',[\App\Http\Controllers\Admin\Publisher::class,'add']);
Route::post('delete/publiser',[\App\Http\Controllers\Admin\Publisher::class,'delete']);





Route::get('Usersdata',[App\Http\Controllers\Userscontroller::class,'data']);




