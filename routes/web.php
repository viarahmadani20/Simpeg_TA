<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AgamaController;
use App\Http\Controllers\Admin\GolonganController;
use App\Http\Controllers\Admin\PendidikanController;
use App\Http\Controllers\Admin\KeluargaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Admin\GajiController;

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
    return view('admin/auth/login');
})->name('admin/login');

Route::get('/guru', function(){
    return view('appguru');})->name('admin/guru/tampil');

Route::get('/admin', function(){
    return view('apppegawai');
})->name('admin/admin/tampil');



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


Route::get('admin/user', [UserController::class, 'index'])->name('admin/user');
Route::get('admin/user/add', [UserController::class, 'add'])->name('admin/user/add');
Route::post('admin/user', [UserController::class, 'simpan_user'])->name('admin/simpan_user');
Route::get('admin/user/hapus/{id}', [UserController::class, 'hapus'])->name('admin/user/hapus');
Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin/editu');
Route::post('admin/user/simpan_upuser/{id}', [UserController::class, 'simpan_upuser'])->name('admin/simpan_upuser');



Route::get('admin/pegawai/index', [PegawaiController::class, 'index'])->name('admin/pegawai/index');
Route::get('admin/pegawai/add', [PegawaiController::class, 'add'])->name('admin/pegawai/add');
Route::get('admin/pegawai/tampil', [PegawaiController::class, 'tampil'])->name('admin/pegawai/tampil');
Route::post('admin/pegawai', [PegawaiController::class, 'simpan_pegawai'])->name('admin/simpan_pegawai');
Route::get('admin/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'])->name('admin/pegawai/hapus');
Route::get('admin/pegawai/editpg/{id}', [PegawaiController::class, 'edit'])->name('admin/editpg');
Route::post('admin/pegawai/simpan_editpg/{id}', [PegawaiController::class, 'simpan_edit'])->name('admin/simpan_editpg');
Route::get('admin/pegawai/show/{pegawai}', [PegawaiController::class, 'show'])->name('admin/pegawai/show');


Route::get('admin/agama', [AgamaController::class, 'index'])->name('admin/agama');
Route::get('admin/agama/add', [AgamaController::class, 'add'])->name('admin/agama/add');
Route::post('admin/agama', [AgamaController::class, 'simpan_agama'])->name('admin/simpan_agama');
Route::get('admin/agama/hapus/{id}', [AgamaController::class, 'hapus'])->name('admin/agama/hapus');
Route::get('admin/agama/editt/{id}', [AgamaController::class, 'ediit'])->name('admin/ediit');
Route::post('admin/agama/simpn_edit/{id}', [AgamaController::class, 'simpn_edit'])->name('admin/simpn_edit');


Route::get('admin/golongan', [GolonganController::class, 'index'])->name('admin/golongan');
Route::get('admin/golongan/add', [GolonganController::class, 'add'])->name('admin/golongan/add');
Route::get('admin/golongan/editgl/{id}', [GolonganController::class, 'editg'])->name('admin/editgl');
Route::post('admin/golongan', [GolonganController::class, 'simpan_golongan'])->name('admin/simpan_golongan');
Route::get('admin/golongan/hapus/{id}', [GolonganController::class, 'hapus'])->name('admin/golongan/hapus');
Route::post('admin/golongan/gol_edit/{id}', [GolonganController::class, 'gol_edit'])->name('admin/gol_edit');


Route::get('admin/pendidikan', [PendidikanController::class, 'index'])->name('admin/pendidikan');
Route::get('admin/pendidikan/add', [PendidikanController::class, 'add'])->name('admin/pendidikan/add');
Route::post('admin/pendidikan', [PendidikanController::class, 'simpan_pendidikan'])->name('admin/simpan_pendidikan');
Route::get('admin/pendidikan/hapus/{id}', [PendidikanController::class, 'hapus'])->name('admin/pendidikan/hapus');
Route::get('admin/pendidikan/editp/{id}', [PendidikanController::class, 'editp'])->name('admin/editp');
Route::post('admin/pendidikan/simpan_editp/{id}', [PendidikanController::class, 'simpan_editp'])->name('admin/simpan_editp');


Route::get('laporan',[LaporanController::class, 'index'])->name('laporan');

Route::get('admin/gaji', [GajiController::class, 'index'])->name('admin/gaji');
Route::get('admin/gaji/add', [GajiController::class, 'add'])->name('admin/gaji/add');
Route::post('admin/gaji', [GajiController::class, 'simpan_gaji'])->name('admin/simpan_gaji');
Route::get('admin/gaji/hapus/{id}', [GajiController::class, 'hapus'])->name('admin/gaji/hapus');
Route::get('admin/gaji/editt/{id}', [GajiController::class, 'edit'])->name('admin/editg');
Route::post('admin/gaji/simpan_edit/{id}', [GajiController::class, 'simpan_edit'])->name('admin/simpan_editg');


Route::get('admin/keluarga', [KeluargaController::class, 'index'])->name('admin/keluarga');
Route::get('admin/keluarga/add', [KeluargaController::class, 'add'])->name('admin/keluarga/add');
Route::post('admin/keluarga', [KeluargaController::class, 'simpan_keluarga'])->name('admin/simpan_keluarga');
Route::get('admin/keluarga/hapus/{id}', [KeluargaController::class, 'hapus'])->name('admin/keluarga/hapus');
Route::get('admin/keluarga/editt/{id}', [KeluargaController::class, 'editt'])->name('admin/editt');
Route::post('admin/keluarga/save_edit/{id}', [KeluargaController::class, 'save_edit'])->name('admin/save_edit');


Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('laporan/add', [LaporanController::class, 'add'])->name('laporan/add');
Route::post('laporan', [LaporanController::class, 'simpan_laporan'])->name('simpan_laporan');
Route::get('laporan/hapus/{id}', [LaporanController::class, 'hapus'])->name('hapus');
Route::get('laporan/editlaporan/{id}', [LaporanController::class, 'editlaporan'])->name('editlaporan');
Route::post('laporan/lap_edit/{id}', [LaporanController::class, 'lap_edit'])->name('lap_edit');


Route::get('surat', [SuratController::class, 'index'])->name('surat');
Route::get('surat/add', [SuratController::class, 'add'])->name('surat/add');
Route::post('surat', [SuratController::class, 'simpan_surat'])->name('simpan_surat');
Route::get('surat/hapus/{id}', [SuratController::class, 'hapus'])->name('surat/hapus');
Route::get('surat/edit/{id}', [SuratController::class, 'edit'])->name('edits');
Route::post('surat_edit/{id}', [SuratController::class, 'simpan_edit'])->name('surat_edits');

Route::get('admin/jabatan', [JabatanController::class, 'index'])->name('admin/jabatan');
Route::get('admin/jabatan/add', [JabatanController::class, 'add'])->name('admin/jabatan/add');
Route::post('admin/jabatan', [JabatanController::class, 'simpan_jabatan'])->name('admin/simpan_jabatan');
Route::get('admin/jabatan/hapus/{id}', [JabatanController::class, 'hapus'])->name('admin/jabatan/hapus');
Route::get('admin/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('admin/edit');
Route::post('admin/jabatan/simpan_edit/{id}', [JabatanController::class, 'simpan_edit'])->name('admin/simpan_edit');
