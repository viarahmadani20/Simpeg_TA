<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\DarahController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengalamanController;
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
    return view('home');
});

Route::get('pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('pegawai/add', [PegawaiController::class, 'add'])->name('pegawai/add');


Route::get('agama', [AgamaController::class, 'index'])->name('agama');
Route::get('agama/add', [AgamaController::class, 'add'])->name('agama/add');


Route::get('darah', [DarahController::class, 'index'])->name('darah');
Route::get('darah/add', [DarahController::class, 'add'])->name('darah/add');

Route::get('pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
Route::get('pendidikan/add', [PendidikanController::class, 'add'])->name('pendidikan/add');

Route::get('keluarga', [KeluargaController::class, 'index'])->name('keluarga');
Route::get('keluarga/add', [KeluargaController::class, 'add'])->name('keluarga/add');

Route::get('negara', [NegaraController::class, 'index'])->name('negara');
Route::get('negara/add', [NegaraController::class, 'add'])->name('negara/add');

Route::get('pengalaman', [PengalamanController::class, 'index'])->name('pengalaman');
Route::get('pengalaman/add', [PengalamanController::class, 'add'])->name('pengalaman/add');


