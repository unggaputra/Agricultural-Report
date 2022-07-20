<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\BibitController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TransaksiController;

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

Route::get('db_test',function ()
{
    return view('db');
});

Route::get('/', [DashboardController::class,'view']);

Route::get('/table',[TableController::class,'view']);
Route::get('/dashboard',[EditController::class,'view']);
Route::get('/add',[AddController::class,'view']);
Route::post('/petani/store',[PetaniController::class,'store']);
Route::get('/petani/edit/{id}',[PetaniController::class,'edit']);
Route::post('/petani/update',[PetaniController::class,'update']);
Route::get('/petani/delete/{id}',[PetaniController::class,'delete']);


Route::post('/desa/store',[DesaController::class,'store']);
Route::get('/desa/edit/{id}',[DesaController::class,'edit']);
Route::post('/desa/update',[DesaController::class,'update']);
Route::get('/desa/delete/{id}',[DesaController::class,'delete']);


Route::post('/lokasi/store',[LokasiController::class,'store']);
Route::get('/lokasi/edit/{id}',[LokasiController::class, 'edit']);
Route::post('/lokasi/update',[LokasiController::class, 'update']);
Route::get('/lokasi/delete/{id}',[LokasiController::class, 'delete']);

Route::post('/bibit/store', [BibitController::class, 'store']);
Route::get('/bibit/edit/{id}',[BibitController::class, 'edit']);
Route::post('/bibit/update', [BibitController::class, 'update']);
Route::get('/bibit/delete/{id}', [BibitController::class, 'delete']);

Route::post('/pupuk/store', [PupukController::class, 'store']);
Route::get('/pupuk/edit/{id}', [PupukController::class, 'edit']);
Route::post('/pupuk/update', [PupukController::class, 'update']);
Route::get('pupuk/delete/{id}', [PupukController::class, 'delete']);

Route::post('/lahan/store', [LahanController::class, 'store']);
Route::get('/lahan/edit/{id}', [LahanController::class, 'edit']);
Route::post('/lahan/update', [LahanController::class, 'update']);
Route::get('/lahan/delete/{id}', [LahanController::class, 'delete']);

Route::post('/transaksi/store', [TransaksiController::class, 'store']);
Route::get('/transaksi/edit/{id}', [TransaksiController::class, 'edit']);
Route::post('/transaksi/update', [TransaksiController::class, 'update']);
Route::get('/transaksi/delete/{id}', [TransaksiController::class, 'delete']);

Route::post('/riwayat/store', [RiwayatController::class, 'store']);
Route::get('/riwayat/edit/{id}', [RiwayatController::class, 'edit']);
Route::post('/riwayat/update', [RiwayatController::class, 'update']);
Route::get('/riwayat/delete/{id}', [RiwayatController::class, 'delete']);





Route::get('/datareport',[DashboardController::class,'getData']);
Route::get('/chart',[DashboardController::class,'chart']);

// Route::get('/add',[AddController::class,'view']);

// Route::get('/table',[TableController::class,'pupuk']);


// Route::get('/table', function () {
//     return view('contents.table');
// });

Route::get('/report', [ChartController::class, 'index']);

// Data
Route::get('getDataPie',[ChartController::class,'getDataPie']);
Route::get('getDataLine',[ChartController::class,'getDataLine']);
