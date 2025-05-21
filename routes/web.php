<?php

use App\Http\Controllers\EskulController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PrestasiController;
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

Auth::routes(['register' => false]);

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('informasi', [App\Http\Controllers\FrontController::class, 'informasi']);
Route::get('informasi{id}', [App\Http\Controllers\FrontController::class, 'informasid'])->name('informasid');
Route::get('jurusan', [App\Http\Controllers\FrontController::class, 'jurusan']);
Route::get('jurusan{id}', [App\Http\Controllers\FrontController::class, 'jurusand'])->name('jurusand');
Route::get('guru', [App\Http\Controllers\FrontController::class, 'guru']);
Route::get('fasilitas', [App\Http\Controllers\FrontController::class, 'fasilitas']);
Route::get('prestasi', [App\Http\Controllers\FrontController::class, 'prestasi']);
Route::get('eskul', [App\Http\Controllers\FrontController::class, 'eskul']);

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('informasi', InformasiController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('eskul', EskulController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('industri', IndustriController::class);
    Route::resource('prestasi', PrestasiController::class);

});
