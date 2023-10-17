<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.users.home');
    })->name('dashboard');
});
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified')->name('redirect');
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::post('/appoinment',[HomeController::class, 'appoinment'])->name('appoinment');

Route::get('/add_doctor',[AdminController::class, 'add_doctor'])->name('add_doctor');
Route::post('/post_doctor',[AdminController::class, 'post_doctor'])->name('post_doctor');