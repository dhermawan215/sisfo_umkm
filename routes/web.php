<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminPerizinanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::get('/perizinan', [AdminPerizinanController::class, 'index'])->name('perizinan');
    Route::get('/perizinan/daftar', [AdminPerizinanController::class, 'daftar'])->name('daftar_perizinan');
    Route::post('/perizinan/simpan', [AdminPerizinanController::class, 'simpan'])->name('simpan_perizinan');
});
