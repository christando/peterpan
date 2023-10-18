<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/Home', [PageController::class, 'home']);

Route::get('/HomeA', [AdminController::class, 'indexadmin']);

Route::get('/Login_A', [AuthController::class, 'Login_Admin']);
Route::get('/Regis_A', [AuthController::class, 'Register_Admin']);
Route::post('/save_A', [AuthController::class, 'Save']);
Route::post('/ceklogin_A', [AuthController::class, 'CekLogin']);
Route::get('/', [AuthController::class, 'Login_Admin'])->name('login');


