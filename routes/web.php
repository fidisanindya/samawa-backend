<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\KhitbahController;
use App\Http\Controllers\KhitbahScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UstadzController;
use App\Http\Controllers\VarificationController;
use App\Models\KhitbahSchedule;
use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

// Route::get('/', function () {
//     return view('home', [
//         'title' => 'home'
//     ]);
// });

Route::get('/home', [UserController::class,'index']);

Route::get('/', [AuthController::class,'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class,'login_page'])->name('login');
Route::post('/login', [AuthController::class,'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class,'logout_page'])->name('logout');

Route::get('/user', [UserController::class,'getNewUser']);
Route::get('/user/edit/{id}', [UserController::class,'edit']); // menampilkan form
Route::post('/user/update/{id}', [UserController::class,'update']); 
Route::get('/user/delete/{id}', [UserController::class,'delete']);

Route::get('/ustadz', [UstadzController::class,'index']);
Route::get('/ustadz/create', [UstadzController::class,'create']);
Route::post('/create-ustadz', [UstadzController::class,'insert']);
Route::get('/ustadz/edit/{id}', [UstadzController::class,'edit']); // menampilkan form
Route::post('/ustadz/update/{id}', [UstadzController::class,'update']); 
Route::get('/ustadz/delete/{id}', [UstadzController::class,'delete']);

Route::get('/khitbah', [KhitbahController::class,'index']);
Route::get('/khitbah/detail/{id}', [KhitbahController::class,'detail']); // menampilkan detail

Route::get('/khitbah-schedule', [KhitbahScheduleController::class,'index']);
Route::get('/khitbah-schedule/detail/{id}', [KhitbahScheduleController::class,'detail']); // menampilkan detail

Route::get('/cv', [CVController::class,'index']);
Route::get('/cv/detail/{id}', [CVController::class,'detail']); // menampilkan detail

Route::get('/varification', [VarificationController::class,'index']);
Route::get('/varification/detail/{id}', [VarificationController::class,'detail']); // menampilkan detail
Route::post('/varification/update/{id}', [VarificationController::class,'update']); 
Route::post('/varification/varificate/{varification}', [VarificationController::class,'varificate'])->name('varificate'); 