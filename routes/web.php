<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\KhitbahController;
use App\Http\Controllers\KhitbahScheduleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UstadzController;
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

$controller_path = 'App\Http\Controllers';

Route::get('/', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

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

Route::get('/khitbah-schedule', [KhitbahScheduleController::class,'index']);
Route::get('/khitbah/create', [KhitbahScheduleController::class,'create']);

Route::get('/cv', [CVController::class,'index']);
Route::get('/cv/detail/{id}', [CVController::class,'detail']); // menampilkan detail