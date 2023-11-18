<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', [Admin::class, 'index']);
    Route::get('/profile', [Admin::class, 'profile']);

    //user
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
});

Route::prefix('/hal')->group(function(){
    Route::get('/login', [LoginController::class, 'index']);
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register/store', [UserController::class, 'registerStore']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
