<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\JasaController;
use App\Http\Controllers\Admin\SpkController;
use App\Http\Controllers\Admin\PartsController;
use App\Http\Controllers\LoginController;

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
// Rute LoginController tidak dilindungi oleh middleware 'auth'
Route::get('/',  [LoginController::class, 'login'])->name('login');
Route::post('loginaksi', [LoginController::class, 'loginaksi'])->name('loginaksi');
Route::get('logoutaksi', [LoginController::class, 'logoutaksi'])->name('logoutaksi');

// Semua rute di bawah ini akan dilindungi oleh middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('/members', [MemberController::class, 'index'])->name('member.index');
    Route::get('/members/create', [MemberController::class, 'create'])->name('member.create');
    Route::post('/members/store', [MemberController::class, 'store'])->name('member.store');
    Route::get('/members/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
    Route::post('/members/update/{id}', [MemberController::class, 'update'])->name('member.update');
    Route::delete('/members/destroy/{id}', [MemberController::class, 'destroy'])->name('member.destroy');
    Route::get('/members/print-pdf', [MemberController::class, 'cetak_pdf'])->name('member_pdf');
    Route::get('/members/laporan', [MemberController::class, 'laporan'])->name('member.laporan');

    Route::get('/jasa', [JasaController::class, 'index'])->name('jasa.index');
    Route::get('/jasa/create', [JasaController::class, 'create'])->name('jasa.create');
    Route::post('/jasa/store', [JasaController::class, 'store'])->name('jasa.store');
    Route::get('/jasa/edit/{id}', [JasaController::class, 'edit'])->name('jasa.edit');
    Route::post('/jasa/update/{id}', [JasaController::class, 'update'])->name('jasa.update');
    Route::delete('/jasa/destroy/{id}', [JasaController::class, 'destroy'])->name('jasa.destroy');
    Route::get('/jasa/laporan', [JasaController::class, 'laporan'])->name('jasa.laporan');
    Route::get('/jasa/print-pdf', [JasaController::class, 'cetak_pdf'])->name('jasa_pdf');

    Route::get('/spk', [SpkController::class, 'index'])->name('spk.index');
    Route::get('/spk/create', [SpkController::class, 'create'])->name('spk.create');
    Route::post('/spk/store', [SpkController::class, 'store'])->name('spk.store');
    Route::get('/spk/edit/{id}', [SpkController::class, 'edit'])->name('spk.edit');
    Route::delete('/spk/destroy/{id}', [SpkController::class, 'destroy'])->name('spk.destroy');
    Route::get('/spk/print-pdf', [SpkController::class, 'cetak_pdf'])->name('spk_pdf');
    Route::get('/spk/laporan', [SpkController::class, 'laporan'])->name('spk.laporan');

    Route::get('/parts', [PartsController::class, 'index'])->name('parts.index');
    Route::get('/parts/add', [PartsController::class, 'create'])->name('parts.create');
    Route::post('/parts/store', [PartsController::class, 'store'])->name('parts.store');
    Route::get('/parts/edit/{id}', [PartsController::class, 'edit'])->name('parts.edit');
    Route::post('/parts/update/{id}', [PartsController::class, 'update'])->name('parts.update');
    Route::delete('/parts/destroy/{id}', [PartsController::class, 'destroy'])->name('parts.destroy');
    Route::get('/parts/print-pdf', [PartsController::class, 'cetak_pdf'])->name('parts_pdf');
    Route::get('/parts/laporan', [PartsController::class, 'laporan'])->name('parts.laporan');

});