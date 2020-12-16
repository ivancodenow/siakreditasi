<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('todo', TodoController::class)->middleware('auth:sanctum');

Route::get('akreditasi/periode', function () {
    return view('akreditasi/index');
});

Route::get('akreditasi/pengisian_akreditasi', function () {
    return 'halaman pengisian akreditasi';
});

Route::get('akreditasi/pengisian_evaluasi_diri', function () {
    return 'halaman pengisian evaluasi diri';
});

Route::get('akreditasi/simulasi_penilaian', function () {
    return 'halaman simulasi penilaian';
});

Route::get('akreditasi/hasil_penilaian', function () {
    return 'halaman hasil penilaian';
});
