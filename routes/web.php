<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pelangganController;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route untuk home page atau tampilan awal web (landing page)
Route::get('/home', function () {
    $testimoni = Testimoni::all();
    return view('home', compact('testimoni'));
})->name('home');

Route::get('/', function () {
    $testimoni = Testimoni::all();
    return view('home', compact('testimoni'));
});

// route untuk menampilkan koleksi kategori yang dimiliki
Route::get('/collection', [KategoriController::class, 'index'])->name('collection');
// route untuk menampilkan produk dari salah satu kategori
Route::get('/kategori/{nama_kategori}', [KategoriController::class, 'ShowByCategory'])->name('kategori.show');

// menampilkan laman register
Route::get('pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create')->middleware('guest');
// menyimpan data pelanggan baru (melakukan registrasi)
Route::post('pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');

// menampilkan laman login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// mengirim data login (autentikasi)
Route::post('login', [LoginController::class, 'login']);
// proses logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk menampilkan form booking
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create')->middleware('auth');

// Route untuk menyimpan data booking
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Route untuk mengambil daftar alat berdasarkan kategori
Route::get('/getAlatByKategori/{kategoriId}', [BookingController::class, 'getAlatByKategori']);

// Route untuk proses pengembalian barang (tombol kembalikan)
Route::patch('/bookings/{id}/return', [BookingController::class, 'return'])->name('bookings.return'); 

// Route menampilkan data my booking atau pesanan saya apa saja
Route::get('/mychart', [ChartController::class, 'showBookings'])->name('bookings.show')->middleware('auth');

// Route untuk menyimpan testimoni baru / menambah testimoni
Route::post('/testimoni/store', [DashboardController::class, 'store'])->name('testimoni.store');

// route untuk login dan logout admin (dibedakan dengan user)
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// route menampilkan laman admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
// route untuk menambah alat baru di laman admin
Route::post('/admin/alat/store', [AdminController::class, 'store'])->name('admin.alat.store');

