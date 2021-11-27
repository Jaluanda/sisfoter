<?php

use App\Http\Controllers\SisfologController;
use App\Http\Controllers\SisfopersController;
use App\Http\Controllers\SisopsController;
use App\Http\Controllers\UserController;
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
    return redirect('dashboard');
})->name('welcome');

//Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
Route::group([ "middleware" => [] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

    Route::get('/sisfopers/daftar', [SisfopersController::class, 'index'])->name('sisfopers.list');
    Route::get('/sisfopers/tambah', [SisfopersController::class, 'create'])->name('sisfopers.create');
    Route::get('/sisfopers/tugas', [SisfopersController::class, 'tugas'])->name('sisfopers.tugas');
    Route::get('/sisfopers/aktif', [SisfopersController::class, 'aktif'])->name('sisfopers.aktif');
    Route::get('/sisfopers/pensiun', [SisfopersController::class, 'pensiun'])->name('sisfopers.pensiun');

    Route::get('/sisfolog/daftar', [SisfologController::class, 'index'])->name('sisfolog.list');
    Route::get('/sisfolog/tambah', [SisfologController::class, 'create'])->name('sisfolog.create');
    Route::get('/sisfolog/btb', [SisfologController::class, 'btb'])->name('sisfolog.btb');
    Route::get('/sisfolog/bb', [SisfologController::class, 'bb'])->name('sisfolog.bb');

    Route::get('/sisops/daftar', [SisopsController::class, 'index'])->name('sisops.list');
    Route::get('/sisops/ongoing', [SisopsController::class, 'ongoing'])->name('sisops.ongoing');
    Route::get('/sisops/past', [SisopsController::class, 'past'])->name('sisops.past');
    Route::get('/sisops/detail', [SisopsController::class, 'show'])->name('sisops.show');
    Route::get('/sisops/create', [SisopsController::class, 'create'])->name('sisops.create');
    Route::get('/sisops/pick/sisfolog', [SisopsController::class, 'pickLog'])->name('sisops.pickLog');
    Route::get('/sisops/pick/sisfopers', [SisopsController::class, 'pickPers'])->name('sisops.pickPers');

});
