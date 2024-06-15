<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembayaranPetugasController;
use App\Http\Controllers\PetugasLoginController;
use App\Http\Controllers\SiswaLoginController;
use App\Http\Controllers\PembayaranSiswaController;
// use App\Http\Controllers\UsrController;

use function PHPUnit\Framework\returnSelf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesej
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route admin
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/loginadmin', [AuthController::class,'index'])->name('login');
Route::post('/loginadmin', [AuthController::class,'login'])->name('login');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware('auth');

// route resource
Route::resource('/datasiswa', SiswaController::class)->middleware('auth');
Route::resource('/datakelas', KelasController::class)->middleware('auth');
Route::resource('/datapetugas', UserController::class)->middleware('auth');
Route::resource('/dataspp', SppController::class)->middleware('auth');
Route::resource('/pembayaran', PembayaranController::class)->middleware('auth');

// route petugas
Route::get('/loginpetugas', [PetugasLoginController::class, 'loginptgs']);
Route::post('/loginpetugas', [PetugasLoginController::class, 'loginpetugas']);
Route::get('/dashboardpetugas', [PetugasLoginController::class, 'dashboardpetugas']);
Route::resource('/pembayaranpetugas', PembayaranPetugasController::class);

// route siswa
Route::get('/loginsiswa', [SiswaLoginController::class, 'loginini']);
Route::post('/loginsiswa', [SiswaLoginController::class, 'loginsiswa']);
Route::get('/dashboardsiswa', [SiswaLoginController::class, 'dashboardsiswa']);
Route::resource('/siswa', PembayaranSiswaController::class);
Route::get('/profil', function(){
    return view('profil');
});
Route::get('/admin/laporan/buatlaporan', function(){
    return view('admin.laporan.buatlaporan');
});
