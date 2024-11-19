<?php

use App\Http\Controllers\databuku;
use App\Http\Controllers\datapinjam;
use App\Http\Controllers\datasantri;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\laporan;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [homecontroller::class, 'index']);


Route::get('/datasantri', [datasantri::class, 'index'])->name('datasantri');

Route::get('/datapinjam', [datapinjam::class, 'index']);

Route::get('/laporan', [laporan::class, 'index']);


Route::get('/databuku', [databuku::class, 'index']);