<?php

use App\Http\Controllers\PenjualanController;
use App\Models\Penjualan;
use App\Models\Transaksi;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/laporan2023', [PenjualanController:: class, 'index']);
Route::get('/laporan2023/json-menu',[PenjualanController::class, 'jsonMenu']);
Route::get('/laporan2023/json-transaksi',[PenjualanController::class, 'jsonTransaksi']);



