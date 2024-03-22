<?php

use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LPController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LPController::class, 'goHome']);
Route::get('/view/{artikel}/{slug}', [LPController::class, 'goArtikel']);
Route::get('/view/all-news', [LPController::class, 'goAllNews']);
Route::get('/coba', [LPController::class, 'coba']);

Auth::routes();

Route::get('/dashboard', [AppController::class, 'home'])->name('home');
Route::get('/ambil-suara', [AppController::class, 'ambilSuara']);
Route::get('/kelola-user', [AppController::class, 'userSetting']);
Route::get('/kelola-user/{akun}', [AppController::class, 'userDetail']);
Route::get('/kelola-artikel', [AppController::class, 'article']);
Route::get('/kelola-artikel/add', [AppController::class, 'addArticle']);
Route::get('/update-artikel/{artikel}/{slug}', [AppController::class, 'updateArtikel']);
Route::get('/activity', [AppController::class, 'activity']);
Route::get('/activity/add', [AppController::class, 'addActivity']);

Route::post('/storeAkun', [AkunController::class, 'store']);
Route::post('/updateAkun', [AkunController::class, 'update']);
Route::get('/destroyUser/{akun}', [AkunController::class, 'destroy']);

Route::post('/kelola-artikel/storeArtikel', [ArtikelController::class, 'store']);
Route::post('/kelola-artikel/updateArtikel', [ArtikelController::class, 'update']);
Route::get('/deleteArtikel/{artikel}', [ArtikelController::class, 'destroy']);
Route::get('/deleteFoto1/{artikel}', [ArtikelController::class, 'dest1']);
Route::get('/deleteFoto2/{artikel}', [ArtikelController::class, 'dest2']);
Route::get('/deleteFoto3/{artikel}', [ArtikelController::class, 'dest3']);
Route::get('/deleteFoto4/{artikel}', [ArtikelController::class, 'dest4']);
Route::get('/deleteFoto5/{artikel}', [ArtikelController::class, 'dest5']);

Route::post('/addActivity', [AktifitasController::class, 'create']);
Route::get('/destroyActivity/{aktifitas}', [AktifitasController::class, 'destroy']);
Route::get('/activity/detail/{aktifitas}', [AktifitasController::class, 'goDetail']);
Route::post('/updateActivity', [AktifitasController::class, 'update']);
Route::get('/download-excell', [AppController::class, 'dwnExcell']);

Route::get('/setting-suara', [AppController::class, 'goSetSuara']);
Route::post('/storePeta', [AppController::class, 'storePeta']);
Route::post('/applyPeta', [AppController::class, 'applyPeta']);
Route::post('/updatePeta', [AppController::class, 'updatePeta']);

