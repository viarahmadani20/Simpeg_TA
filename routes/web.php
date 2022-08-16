<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AgamaController;
use App\Http\Controllers\Admin\GolonganController;
use App\Http\Controllers\Admin\PendidikanController;
use App\Http\Controllers\Admin\KeluargaController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\GuruController;

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

// Route::get('/guru', function () {
//     return view('appguru');
// })->name('guru/dashboard');

// Route::get('/pegawai', function () {
//     return view('apppegawai');
// })->name('pegawai/dashboard');

// Route::middleware('auth')->group(function () {


Route::get('admin/tampil', [PegawaiController::class, 'tampil'])->name('admin/dashboard');
Route::get('guru/index', [PegawaiController::class, 'dashboardg'])->name('guru/dashboard');
Route::get('pegawai/index', [PegawaiController::class, 'dashboardp'])->name('pegawai/dashboard');
// });

Route::middleware(['role:pegawai'])->group(function () {


});
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('admin/agama', [AgamaController::class, 'index'])->name('admin/agama');
Route::get('admin/agama/add', [AgamaController::class, 'add'])->name('admin/agama/add');
Route::post('admin/agama', [AgamaController::class, 'simpan_agama'])->name('admin/simpan_agama');
Route::get('admin/agama/hapus/{id}', [AgamaController::class, 'hapus'])->name('admin/agama/hapus');
Route::get('admin/agama/editt/{id}', [AgamaController::class, 'ediit'])->name('admin/ediit');
Route::post('admin/agama/simpn_edit/{id}', [AgamaController::class, 'simpn_edit'])->name('admin/simpn_edit');

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

//Data Pegawai

Route::get('admin/pegawai/index', [PegawaiController::class, 'index'])->name('admin/pegawai/index');
Route::get('admin/pegawai/add', [PegawaiController::class, 'add'])->name('admin/pegawai/add');

Route::post('admin/pegawai', [PegawaiController::class, 'simpan_pegawai'])->name('admin/simpan_pegawai');
Route::get('admin/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'])->name('admin/pegawai/hapus');
Route::get('admin/pegawai/editpg/{id}', [PegawaiController::class, 'edit'])->name('admin/editpg');
Route::post('admin/pegawai/simpan_editpg/{id}', [PegawaiController::class, 'simpan_edit'])->name('admin/simpan_editpg');
Route::get('admin/pegawai/show/{pegawai}', [PegawaiController::class, 'show'])->name('admin/pegawai/show');

//Data Guru

Route::get('admin/guru/index', [GuruController::class, 'index'])->name('admin/guru/index');
Route::get('admin/guru/add', [GuruController::class, 'add'])->name('admin/guru/add');

Route::post('admin/guru', [GuruController::class, 'simpan_guru'])->name('admin/simpan_guru');
Route::get('admin/guru/hapus/{id}', [GuruController::class, 'hapus'])->name('admin/guru/hapus');
Route::get('admin/guru/editpg/{id}', [GuruController::class, 'edit'])->name('admin/edita');
Route::post('admin/guru/simpan_editpg/{id}', [GuruController::class, 'simpan_edit'])->name('admin/simpan_edita');
Route::get('admin/guru/show/{guru}', [GuruController::class, 'showa'])->name('admin/guru/show');

//

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

//profil

Route::get('profil', [LoginController::class, 'profil'])->name('profil');
Route::get('profil/edit/{id}', [LoginController::class, 'edit'])->name('profil/edit');
Route::post('profil/simpan_edit/{id}', [LoginController::class, 'simpan_edit'])->name('profil/simpan_edit');

//gajiprofil

Route::get('gajip/show', [GajiController::class, 'show'])->name('gajip');
Route::post('gajip/download', [GajiController::class, 'show'])->name('gaji/download');
Route::get('gajip/cetak', [GajiController::class, 'cetak'])->name('gaji/cetak');
Route::get('gaji/cetak', [GajiController::class, 'cetaka'])->name('admin/gaji/cetak');



Route::get('laporan', [LaporanController::class, 'index'])->name('laporan');

Route::get('admin/gaji', [GajiController::class, 'index'])->name('admin/gaji');
Route::get('admin/gaji/add', [GajiController::class, 'add'])->name('admin/gaji/add');
Route::post('admin/gaji', [GajiController::class, 'simpan_gaji'])->name('admin/simpan_gaji');
Route::get('admin/gaji/hapus/{id}', [GajiController::class, 'hapus'])->name('admin/gaji/hapus');
Route::get('admin/gaji/editt/{id}', [GajiController::class, 'edit'])->name('admin/editg');
Route::post('admin/gaji/simpan_edit/{id}', [GajiController::class, 'simpan_edit'])->name('admin/simpan_editg');
Route::get('admin/gaji/show/{gaji}', [GajiController::class, 'showa'])->name('admin/gaji/show');


Route::get('admin/keluarga', [KeluargaController::class, 'index'])->name('admin/keluarga');
Route::get('admin/keluarga/add', [KeluargaController::class, 'add'])->name('admin/keluarga/add');
Route::post('admin/keluarga', [KeluargaController::class, 'simpan_keluarga'])->name('admin/simpan_keluarga');
Route::get('admin/keluarga/hapus/{id}', [KeluargaController::class, 'hapus'])->name('admin/keluarga/hapus');
Route::get('admin/keluarga/editt/{id}', [KeluargaController::class, 'editt'])->name('admin/editt');
Route::post('admin/keluarga/save_edit/{id}', [KeluargaController::class, 'save_edit'])->name('admin/save_edit');


Route::get('guru/laporan', [LaporanController::class, 'indexg'])->name('guru/laporan');
Route::get('guru/laporan/add', [LaporanController::class, 'addg'])->name('guru/laporan/add');
Route::post('guru/laporan', [LaporanController::class, 'simpan_laporang'])->name('guru/simpan_laporan');
Route::get('guru/laporan/hapus/{id}', [LaporanController::class, 'hapus'])->name('guru/hapus');
Route::get('guru/laporan/editlaporan/{id}', [LaporanController::class, 'editg'])->name('guru/editlaporan');
Route::post('guru/laporan/lap_edit/{id}', [LaporanController::class, 'simpan_editlap'])->name('guru/lap_edit');



Route::get('admin/laporan', [LaporanController::class, 'index'])->name('admin/laporan');
Route::get('admin/laporan/hapus/{id}', [LaporanController::class, 'hapus'])->name('admin/hapus');
Route::get('admin/laporan/{laporan}/konfirmasi', [LaporanController::class, 'form_konfirmasilap'])->name('admin/form_konfirmasi');
Route::post('admin/laporan/{laporan}/konfirmasi', [LaporanController::class, 'konfirmasi_laporan'])->name('admin/laporan/konfirmasi');

Route::get('pegawai/laporan', [LaporanController::class, 'indexp'])->name('pegawai/laporan');
Route::get('pegawai/laporan/add', [LaporanController::class, 'add'])->name('pegawai/laporan/add');
Route::post('pegawai/laporan', [LaporanController::class, 'simpan_laporan'])->name('pegawai/simpan_laporan');
Route::get('pegawai/laporan/hapus/{id}', [LaporanController::class, 'hapus'])->name('pegawai/hapus');


Route::get('admin/surat', [SuratController::class, 'index'])->name('admin/surat');
Route::get('admin/surat/add', [SuratController::class, 'add'])->name('admin/surat/add');
Route::post('admin/surat', [SuratController::class, 'simpan_surat'])->name('admin/simpan_surat');
Route::get('admin/surat/hapus/{id}', [SuratController::class, 'hapus'])->name('admin/surat/hapus');
Route::get('admin/surat/edit/{id}', [SuratController::class, 'edit'])->name('admin/edits');
Route::post('admin/surat_edit/{id}', [SuratController::class, 'simpan_edit'])->name('admin/surat_edits');

Route::get('admin/surat/{surat}/konfirmasi', [SuratController::class, 'form_konfirmasi'])->name('admin/surat/form_konfirmasi');
Route::post('admin/surat/{surat}/konfirmasi', [SuratController::class, 'konfirmasi'])->name('admin/surat/konfirmasi');


Route::get('guru/surat', [SuratController::class, 'indexx'])->name('guru/surat');
Route::get('guru/surat/add', [SuratController::class, 'form_surat'])->name('guru/surat/form_surat');
Route::post('guru/surat', [SuratController::class, 'buat_surat'])->name('guru/surat/buat_surat');
Route::get('guru/surat/hapus/{id}', [SuratController::class, 'hapus'])->name('guru/surat/hapus');
Route::get('guru/surat/edit/{id}', [SuratController::class, 'edit'])->name('guru/surat/edits');
Route::post('guru/surat_edit/{id}', [SuratController::class, 'simpan_edit'])->name('guru/surat_edits');

Route::get('pegawai/surat', [SuratController::class, 'indexp'])->name('pegawai/surat');
Route::get('pegawai/surat/add', [SuratController::class, 'form_suratp'])->name('pegawai/surat/form_surat');
Route::post('pegawai/surat', [SuratController::class, 'buat_suratp'])->name('pegawai/surat/buat_surat');
Route::get('pegawai/surat/hapus/{id}', [SuratController::class, 'hapus'])->name('pegawai/surat/hapus');
Route::get('pegawai/surat/edit/{id}', [SuratController::class, 'edit'])->name('pegawai/surat/edits');
Route::post('pegawai/surat_edit/{id}', [SuratController::class, 'simpan_edit'])->name('pegawai/surat_edits');


// Route::get('admin/surat', [SuratController::class, 'index'])->name('admin/surat');
// Route::get('admin/surat/add', [SuratController::class, 'add'])->name('admin/surat/add');
// Route::post('admin/surat', [SuratController::class, 'simpan_surat'])->name('admin/simpan_surat');
// Route::get('admin/surat/hapus/{id}', [SuratController::class, 'hapus'])->name('admin/surat/hapus');
// Route::get('admin/surat/edit/{id}', [SuratController::class, 'edit'])->name('admin/surat/edits');
// Route::post('admin/surat_edit/{id}', [SuratController::class, 'simpan_edit'])->name('admin/surat_edits');


Route::get('admin/jabatan', [JabatanController::class, 'index'])->name('admin/jabatan');
Route::get('admin/jabatan/add', [JabatanController::class, 'add'])->name('admin/jabatan/add');
Route::post('admin/jabatan', [JabatanController::class, 'simpan_jabatan'])->name('admin/simpan_jabatan');
Route::get('admin/jabatan/hapus/{id}', [JabatanController::class, 'hapus'])->name('admin/jabatan/hapus');
Route::get('admin/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('admin/edit');
Route::post('admin/jabatan/simpan_edit/{id}', [JabatanController::class, 'simpan_edit'])->name('admin/simpan_edit');



// Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('simpan_login', [LoginController::class, 'simpan_login'])->name('simpan_login');
// Route::post('registrasi_simpan', [LoginController::class, 'registrasi_simpan'])->name('registrasi_simpan');
