<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;

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
    Route::get('/user/show/{id}', [UserController::class, 'show']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'destroy']);
    Route::get('/user/exportPDF', [UserController::class, 'exportPDF']);

    //paket
    Route::get('paket', [PaketController::class, 'index']);
    Route::get('paket/create', [PaketController::class, 'create']);
    Route::post('paket/store', [PaketController::class, 'store']);
    Route::get('paket/show/{id}', [PaketController::class,'show']);
    Route::get('paket/edit/{id}', [PaketController::class,'edit']);
    Route::post('paket/update/{id}', [PaketController::class,'update']);
    Route::get('paket/delete/{id}', [PaketController::class,'destroy']);
    Route::get('paket/exportPDF/', [PaketController::class,'exportPDF']);
});

Route::prefix('/hal')->group(function(){
    Route::get('/login', [LoginController::class, 'index']);
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register/store', [UserController::class, 'registerStore']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
