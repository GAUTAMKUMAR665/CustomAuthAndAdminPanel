<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/passwordreset',function()
{
  return view('Admin.Users.passwordreset');
})->middleware('guest')->name('passwordreset');



Route::get('/token',function()
{
    return response()->json(csrf_token());
});

Route::get('/',[\App\Http\Controllers\Statics\frontend::class,'main']);
Route::get('/index',[\App\Http\Controllers\Statics\frontend::class,'index']);
Route::get('/industry',[\App\Http\Controllers\Statics\frontend::class,'industry']);
Route::get('/service',[\App\Http\Controllers\Statics\frontend::class,'service']);
Route::get('/report',[\App\Http\Controllers\Statics\frontend::class,'report']);
Route::get('/aboutus',[\App\Http\Controllers\Statics\frontend::class,'about']);
Route::get('/contactus',[\App\Http\Controllers\Statics\frontend::class,'contact']);
Route::get('/panel', [\App\Http\Controllers\Statics\frontend::class,'panel']);
