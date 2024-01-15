<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\RegisterAdminController;
use App\Http\Controllers\User\CreateRecordController;
use App\Http\Controllers\User\UpdateRecordController;
use App\Http\Controllers\User\ViewRecordController;
use Illuminate\Support\Facades\Route;


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
Route::get('/view/record/{id}',[ViewRecordController::class,'viewRecord'])->name('record.view');

Route::get('/update/record/{id}',[UpdateRecordController::class,'showUpdate']);
