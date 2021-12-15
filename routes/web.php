<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Auth::routes();

Route::post('/loginUser', [AuthController::class, 'loginUser'])->name('login.user');
Route::post('/regUser', [AuthController::class, 'registerUser'])->name('register.user');
Route::post('/re-verify', [AuthController::class, 'reVerifyEmail'])->name('re-verify.user');
Route::get('/confirm-auth/{email}', [AuthController::class, 'confirmEmail']);
Route::get('/email-verification', [AuthController::class, 'showEmailVerification'])->name('verification');

Route::get('/user-profile/{name}', [AuthController::class, 'userProfile'])->name('profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
