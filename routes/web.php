<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\AuthDriverController;
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

// Route::get('/index', function () {
//     return view('welcome');
// });

Route::get('/Home', [PageController::class, 'home']);


Route::get('/data/mobil', [AdminController::class, 'datamobil']);

//login
Route::get('/', [AuthController::class, 'Login_Admin'])->name('login');
Route::get('/logout',[AuthController::class, 'logout']);

//admin
Route::get('/Login_A', [AuthController::class, 'Login_Admin']);
Route::get('/Regis_A', [AuthController::class, 'Register_Admin']);
Route::post('/save_A', [AuthController::class, 'Save']); 
Route::post('/ceklogin_A', [AuthController::class, 'CekLogin']);
Route::get('/HomeA', [AdminController::class, 'indexadmin']);

//user
Route::get('/Login_U',[AuthUserController::class, 'Login_User']);
Route::get('/Regis_U', [AuthUserController::class, 'Register_User']);
Route::post('/save_U', [AuthUserController::class, 'Save']); 
Route::post('/ceklogin_U', [AuthUserController::class, 'CekLoginUser']);
Route::get('/HomeU', [UserController::class, 'indexuser']);


//driver
Route::get('/Login_D',[AuthDriverController::class, 'Login_Driver']);
Route::get('/Regis_D', [AuthDriverController::class, 'Register_Driver']);
Route::post('/save_D', [AuthDriverController::class, 'Save']); 
Route::post('/ceklogin_D', [AuthDriverController::class, 'CekLoginDriver']);
Route::get('/HomeD', [DriverController::class, 'indexdriver']);

