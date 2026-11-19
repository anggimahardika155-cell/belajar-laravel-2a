<?php 
use Illuminate\Support\Facades\Route;

//import Controller
use App\Http\Controllers\Web; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorSegitigaController;


//  1. Route Dasar
Route::get('/', function () {
    return "Hallo namaku adalah Anggi, Salam Kenal";
});

//  2.Route About
Route::get('/about', function () {
    return "<h2>Ini adalah laman About</h2>";
});

//  3. Route Controller Web
Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);

//  4. Route Controller DashboardController
Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
Route::get('/about', [DashboardController::class, 'about']);

//  5. route untuk membuka view biodata
Route::get('/biodata',[Web::class, 'biodata']);

//  6. Route Controller Kalkulator 
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

//  7. Route Daftar Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

//  8. Route Kalkulator Segitiga
Route::get('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [KalkulatorSegitigaController::class, 'prosesSegitiga']);

//  9. route ke controller Dashboard home
Route::get('/dashboard',[DashboardController::class, 'home']);
Route::get('/gallery',[DashboardController::class,'gallery']);
