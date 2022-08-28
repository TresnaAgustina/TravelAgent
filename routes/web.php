<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;

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

// View
Route::get('/', [ViewController::class, 'home']);
Route::get('/tour', [ViewController::class, 'tour']);
Route::get('/detail', [ViewController::class, 'tourDetail']);
Route::get('/dashboard', [ViewController::class, 'dashboard']);

// Login 
Route::get('/login', [LoginController::class, 'index'])
      ->middleware('web')
      ->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

// logout
Route::get('/logout', [LoginController::class, 'destroy']);


// Register
Route::get('/regist', [RegistController::class, 'index']);
Route::post('/regist', [RegistController::class, 'store']);
