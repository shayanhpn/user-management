<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\RegisterAdminController;
use App\Http\Controllers\User\CreateRecordController;
use App\Http\Controllers\User\ViewRecordController;
use Illuminate\Support\Facades\Route;

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
    return view('main-page');
});

Route::get('/register',[RegisterAdminController::class,'showRegisterAdmin']);
Route::post('register',[RegisterAdminController::class,'registerAdmin'])->name('register');

Route::get('/login',[LoginAdminController::class,'showLoginAdmin']);
Route::post('/login',[LoginAdminController::class,'loginAdmin'])->name('login');

Route::get('/create-record',[CreateRecordController::class,'showCreateRecord']);
Route::post('/create-record',[CreateRecordController::class,'createRecord']);

Route::get('/dashboard',[DashboardController::class,'showDashboard']);
Route::get('/view/record/{id}',[ViewRecordController::class,'viewRecord']);
