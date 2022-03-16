<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\DarahController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
    return view('pegawai/tampil');
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
// Route::post('registrasi_simpan', [LoginController::class, 'registrasi_simpan'])->name('registrasi_simpan');

Route::get('admin_index', [UserController::class, 'admin_index'])->name('admin_index');
Route::get('admin_add', [UserController::class, 'admin_add'])->name('admin_add');

Route::get('pegawai/index', [PegawaiController::class, 'index'])->name('pegawai/index');
Route::get('pegawai/add', [PegawaiController::class, 'add'])->name('pegawai/add');


Route::get('agama', [AgamaController::class, 'index'])->name('agama');
Route::get('agama/add', [AgamaController::class, 'add'])->name('agama/add');
Route::post('agama', [AgamaController::class, 'simpan_agama'])->name('simpan_agama');
Route::get('agama/hapus/{id}', [AgamaController::class, 'hapus'])->name('hapus');

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

Route::get('jabatan', [JabatanController::class, 'index'])->name('jabatan');
Route::get('jabatan/add', [JabatanController::class, 'add'])->name('jabatan/add');
Route::post('jabatan', [JabatanController::class, 'simpan_jabatan'])->name('simpan_jabatan');
Route::get('jabatan/hapus/{id}', [JabatanController::class, 'hapus'])->name('hapus');
