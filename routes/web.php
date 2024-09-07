<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [PageController::class, 'index'])->name('index');


Route::get('/admin', [ DashboardController::class , 'dashboard'])->name('dashboard')->middleware('auth');

Route::prefix('payments')->middleware('auth')->controller(DashboardController::class)->group(function() {
    Route::get('/', 'index')->name('payment.method');
    Route::post('/store', 'store')->name('payment.store');
    Route::get('/{payment:payment_name}', 'detail')->name('payment.detail');
    Route::get('/{payment:payment_name}/edit', 'edit')->name('payment.edit');
    Route::put('/{payment:payment_name}/edit', 'update');
    Route::delete('/{payment:payment_name}', 'destroy')->name('payment.delete');
});


Route::controller(AuthController::class)->group(function() {
    Route::middleware('guest')->group(function() {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
    });
    Route::post('/logout', 'destroy')->name('logout')->middleware('auth');
});
