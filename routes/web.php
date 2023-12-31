<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminPerizinanController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthController;
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

// auth route
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::prefix('auth')->middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/change-password', [AuthController::class, 'changePassword'])->name('change_password');
    Route::post('/change-password', [AuthController::class, 'updatePassword'])->name('update_password');
});


// route admin
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');
    // perizinan route
    Route::get('/perizinan', [AdminPerizinanController::class, 'index'])->name('perizinan');
    Route::get('/perizinan/daftar', [AdminPerizinanController::class, 'daftar'])->name('daftar_perizinan');
    Route::post('/perizinan/simpan', [AdminPerizinanController::class, 'simpan'])->name('simpan_perizinan');
    Route::get('/perizinan/sukses/{id}', [AdminPerizinanController::class, 'sukses'])->name('sukses');
    Route::get('/perizinan/detail/{id}', [AdminPerizinanController::class, 'detail'])->name('detail');
    Route::get('/perizinan/download/{id}', [AdminPerizinanController::class, 'download'])->name('download');

    // route admin user management
    Route::middleware('isAdmin')->group(function () {
        Route::get('/user-management', [AdminUserController::class, 'index'])->name('user_management');
        Route::get('/user-management/register', [AdminUserController::class, 'daftar'])->name('user_register');
        Route::post('/user-management', [AdminUserController::class, 'store'])->name('user_store');
        Route::delete('/user-management/{user}', [AdminUserController::class, 'deleteUser'])->name('delete_user');
    });
});
