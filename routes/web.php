<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KategoriRuanganController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UsersController;

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
    //return view('welcome');
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::view('/admin', 'admin.home');
Route::view('/admin/pages/basictable', 'admin.pages.basictable');
Route::view('/admin/pages/basicelement', 'admin.pages.basicelement');
Route::view('/admin/pages/chart', 'admin.pages.chart');
Route::view('/admin/pages/icons', 'admin.pages.icons');

// ------Route Bisnis Proses
Route::resource('/gedung', GedungController::class);
Route::get('/gedung-list', [GedungController::class, 'gedungList']);


Route::resource('/fasilitas', FasilitasController::class);
Route::resource('/users', UsersController::class)->middleware('auth');

Route::resource('/kategori-ruangan', Kategori_RuanganController::class);
Route::resource('/ruangan', RuanganController::class); //klo make resource get,put,dll udh jadisatu
Route::get('ruangan-delete/{id}', [RuanganController::class, 'delete']);

Route::get('generate-pdf', [RuanganController::class, 'generatePDF']);
Route::get('ruangan-pdf', [RuanganController::class, 'ruanganPDF']);
Route::get('ruangan-excel', [RuanganController::class, 'ruanganExcel']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/after_register', function () {
    return view('landingpage.after_register');
});

Route::get('/access_denied', function () {
    return '<script>alert("Access Denied !!! Anda Terlarang Akses Halaman Ini !!!");history.go(-1);</script>';
});
