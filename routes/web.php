<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinjamanController;

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
    return view('welcome');
});

Route::get('/dashboard', [PinjamanController::class, 'index'])->name('hal_utama');

Route::post('/pinjaman/create', [PinjamanController::class, 'create']);

Route::get('/pinjaman/{id}', [PinjamanController::class, 'edit'])->name('hal_update');

Route::put('/pinjaman/{id}', [PinjamanController::class, 'update']);

Route::delete('/pinjaman/{id}', [PinjamanController::class, 'destroy'])->name('destroy');
