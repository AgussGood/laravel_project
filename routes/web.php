<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\IndustriController;
use App\Http\Middleware\isAdmin;
use App\Http\Controllers\FrontController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);


Route::prefix('admin')->middleware('auth')->group(function () {

Route::resource('informasi', InformasiController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('eskul', EskulController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('industri', IndustriController::class);
});