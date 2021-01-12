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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/passwordreset',function()
{
  return view('Admin.Users.passwordreset');
})->middleware('guest')->name('passwordreset');



Route::get('/token',function()
{
    return response()->json(csrf_token());
});

Route::get('targlo/main',[\App\Http\Controllers\Statics\frontend::class,'index']);
