<?php

use App\Http\Controllers\CertificateController;
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

Route::prefix('/')->group(function () {
    Route::get('/', [CertificateController::class, 'generate'])->name('home');
    Route::get('/tambah', [CertificateController::class, 'tambah'])->name('tambah');
    Route::get('/generate', [CertificateController::class, 'generate'])->name('generate');
    Route::post('/tambah_list', [CertificateController::class, 'tambah_list'])->name('tambah_list');
});
