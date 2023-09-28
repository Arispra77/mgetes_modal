<?php

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

use App\Http\Controllers\TabelController;

Route::get('/tabel-utama', [TabelController::class, 'index'])->name('tabel-utama');
Route::get('/tabel-kedua/{kode}', [TabelController::class, 'showTabelKedua'])->name('tabel-kedua');

// Route::get('/', function () {
//     return view('welcome');
// });
