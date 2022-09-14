<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/', [ViewController::class, 'home'])
      ->middleware('web');
Route::get('/tour', [ViewController::class, 'tour'])
      ->middleware('web');
Route::get('/detail/{code}', [ViewController::class, 'tourDetail'])
      ->middleware('web');
Route::get('/dashboard', [ViewController::class, 'dashboard'])
      ->middleware('auth');


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

// Create Post
Route::get('/create', [PostController::class, 'index'])
      ->middleware('auth');
Route::post('/store', [PostController::class, 'store']);
