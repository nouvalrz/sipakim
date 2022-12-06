<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputDataController;
use App\Http\Controllers\DataKeluargaController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::prefix('input-data-keluarga')->group(function(){
    Route::get('/', [InputDataController::class, 'index'])->name('input.index');
    Route::post('/add', [InputDataController::class, 'store'])->name('input.store');
    Route::post('/import', [InputDataController::class, 'import'])->name('input.import');
});

Route::prefix('data-keluarga-miskin')->group(function(){
    Route::get('/', [DataKeluargaController::class, 'index'])->name('data.index');
    Route::get('/{id}/show', [DataKeluargaController::class, 'show'])->name('data.show');
    Route::get('/{id}/edit', [DataKeluargaController::class, 'edit'])->name('data.edit');
    Route::put('/{id}/update', [DataKeluargaController::class, 'update'])->name('data.update');
    Route::delete('/{id}/delete', [DataKeluargaController::class, 'destroy'])->name('data.delete');
});

Route::get('/informasi-statistik', [DataKeluargaController::class, 'statistik'])->name('data.statistik');

Route::get('/profile/settings', function () {
    return view('profile');
});

//Auth::routes();
//
//Route::get('/home', function() {
//    return view('home');
//})->name('home')->middleware('auth');
