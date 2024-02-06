<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pesertaController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\landingController;
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

// Route::get('/', function () {
//     return view('kerangka.master');
// });

// Route::get('/', [App\Http\Controllers\landing:class, 'landing'])->name('landing.event');
Route::get('/', [App\Http\Controllers\landingController::class, 'landing']) -> name('kelamin-kuda');

Route::get('/dashboard' , [dashboardController::class, 'index'])->middleware('auth');

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/login' , [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [loginController::class, 'login'])->name('login.event');

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'event'])->name('register.event');

// event
Route::get('/data-event', [eventController::class, 'index'])->name('event.index');
Route::get('/create-event', [eventController::class, 'create'])->name('event.create');
Route::post('/event', [eventController::class, 'make'])->name('event.make');
Route::get('/events/{id}/edit', [eventController::class, 'edit'])->name('event.edit');
Route::post('/events/{event}/update', [eventController::class, 'update'])->name('event.update');
Route::delete('/events/{event}/hapus', [eventController::class, 'hapus'])->name('event.hapus');

// peserta
Route::get('/data-peserta', [pesertaController::class, 'index'])->name('peserta.index');
Route::get('/create-peserta', [pesertaController::class, 'create'])->name('peserta.create');
Route::post('/peserta', [pesertaController::class, 'buat'])->name('peserta.buat');
Route::get('/pesertas/{id}/edit', [pesertaController::class, 'edit'])->name('peserta.edit');
Route::post('/pesertas/{peserta}/update', [pesertaController::class, 'update'])->name('peserta.update');
Route::delete('/pesertas/{peserta}/hapus', [pesertaController::class, 'hapus'])->name('peserta.hapus');

