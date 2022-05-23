<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\GajiController;

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
    return view('auth/login');
})->name('login');

Route::get('/guru', function(){
    return view('appguru');
})->name('guru/tampil');

Route::get('/admin', function(){
    return view('appadmin');
})->name('admin/tampil');

// Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('simpan_login', [LoginController::class, 'simpan_login'])->name('simpan_login');
// Route::post('registrasi_simpan', [LoginController::class, 'registrasi_simpan'])->name('registrasi_simpan');

Route::get('admin_index', [UserController::class, 'admin_index'])->name('admin_index');
Route::get('admin_add', [UserController::class, 'admin_add'])->name('admin_add');
Route::get('pegawaiuser_index', [UserController::class, 'pegawaiuser_index'])->name('pegawaiuser_index');
Route::get('pegawaiuser_add', [UserController::class, 'pegawaiuser_add'])->name('pegawaiuser_add');
Route::get('guruuser_index', [UserController::class, 'guruuser_index'])->name('guruuser_index');
Route::get('guruuser_add', [UserController::class, 'guruuser_add'])->name('guruuser_add');


Route::get('pegawai/index', [PegawaiController::class, 'index'])->name('pegawai/index');
Route::get('pegawai/add', [PegawaiController::class, 'add'])->name('pegawai/add');
Route::get('pegawai/tampil', [PegawaiController::class, 'tampil'])->name('pegawai/tampil');


Route::get('agama', [AgamaController::class, 'index'])->name('agama');
Route::get('agama/add', [AgamaController::class, 'add'])->name('agama/add');
Route::post('agama', [AgamaController::class, 'simpan_agama'])->name('simpan_agama');
Route::get('agama/hapus/{id}', [AgamaController::class, 'hapus'])->name('hapus');
Route::get('agama/editt/{id}', [AgamaController::class, 'ediit'])->name('ediit');
Route::post('agama/simpn_edit/{id}', [AgamaController::class, 'simpn_edit'])->name('simpn_edit');


Route::get('golongan', [GolonganController::class, 'index'])->name('golongan');
Route::get('golongan/add', [GolonganController::class, 'add'])->name('golongan/add');
Route::get('golongan/editg/{id}', [GolonganController::class, 'editg'])->name('editg');
Route::post('golongan', [GolonganController::class, 'simpan_golongan'])->name('simpan_golongan');
Route::get('golongan/hapus/{id}', [GolonganController::class, 'hapus'])->name('hapus');
Route::post('golongan/gol_edit/{id}', [GolonganController::class, 'gol_edit'])->name('gol_edit');


Route::get('pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
Route::get('pendidikan/add', [PendidikanController::class, 'add'])->name('pendidikan/add');
Route::post('pendidikan', [PendidikanController::class, 'simpan_pendidikan'])->name('simpan_pendidikan');
Route::get('pendidikan/hapus/{id}', [PendidikanController::class, 'hapus'])->name('hapus');
Route::get('pendidikan/editp/{id}', [PendidikanController::class, 'editp'])->name('editp');
Route::post('pendidikan/simpan_editp/{id}', [PendidikanController::class, 'simpan_editp'])->name('simpan_editp');


Route::get('laporan',[LaporanController::class, 'index'])->name('laporan');

Route::get('gaji', [GajiController::class, 'index'])->name('gaji');
Route::get('gaji/add', [GajiController::class, 'add'])->name('gaji/add');
Route::post('gaji', [GajiController::class, 'simpan_gaji'])->name('simpan_gaji');
Route::get('gaji/hapus/{id}', [GajiController::class, 'hapus'])->name('hapus');
Route::get('gaji/editt/{id}', [GajiController::class, 'edit'])->name('editg');
Route::post('gaji/simpan_edit/{id}', [GajiController::class, 'simpan_edit'])->name('simpan_editg');


Route::get('keluarga', [KeluargaController::class, 'index'])->name('keluarga');
Route::get('keluarga/add', [KeluargaController::class, 'add'])->name('keluarga/add');
Route::post('keluarga', [KeluargaController::class, 'simpan_keluarga'])->name('simpan_keluarga');
Route::get('keluarga/hapus/{id}', [KeluargaController::class, 'hapus'])->name('hapus');
Route::get('keluarga/editt/{id}', [KeluargaController::class, 'editt'])->name('editt');
Route::post('keluarga/save_edit/{id}', [KeluargaController::class, 'save_edit'])->name('save_edit');


Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('laporan/add', [LaporanController::class, 'add'])->name('laporan/add');
Route::post('laporan', [LaporanController::class, 'simpan_laporan'])->name('simpan_laporan');
Route::get('laporan/hapus/{id}', [LaporanController::class, 'hapus'])->name('hapus');
Route::get('laporan/editlaporan/{id}', [LaporanController::class, 'editlaporan'])->name('editlaporan');
Route::post('laporan/lap_edit/{id}', [LaporanController::class, 'lap_edit'])->name('lap_edit');


Route::get('surat', [SuratController::class, 'index'])->name('surat');
Route::get('surat/add', [SuratController::class, 'add'])->name('surat/add');

Route::get('jabatan', [JabatanController::class, 'index'])->name('jabatan');
Route::get('jabatan/add', [JabatanController::class, 'add'])->name('jabatan/add');
Route::post('jabatan', [JabatanController::class, 'simpan_jabatan'])->name('simpan_jabatan');
Route::get('jabatan/hapus/{id}', [JabatanController::class, 'hapus'])->name('hapus');
Route::get('jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('edit');
Route::post('jabatan/simpan_edit/{id}', [JabatanController::class, 'simpan_edit'])->name('simpan_edit');
