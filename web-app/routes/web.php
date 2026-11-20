<?php 
use Illuminate\Support\Facades\Route;

//import Controller
use App\Http\Controllers\Web; 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorSegitigaController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;

//  1. Route Login (Modul Hal. 35)
Route::get('/', function(){
    return view('login');
});
Route::post('/login', [AuthController::class, 'cek']);

//  2. Route Praktikum Awal
Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);
Route::get('/biodata', [Web::class, 'biodata']);

Route::get('/home', [DashboardController::class, 'home']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);

Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'segitiga']);
Route::post('/kalkulator/segitiga/proses', [KalkulatorSegitigaController::class, 'prosesSegitiga']);

//  3. Route Group yang Harus Login Dahulu (Modul Hal. 38)
Route::group(['middleware' => 'islogin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'home']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);
    Route::get('/about', [DashboardController::class, 'about']);

    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe', [EmployeController::class, 'store']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::get('/employe/{id}/edit', [EmployeController::class, 'edit']);
    Route::put('/employe/{id}', [EmployeController::class, 'update']);
    Route::delete('/employe/{id}', [EmployeController::class, 'destroy']);

    Route::get('/logout', [AuthController::class, 'logout']);
});
