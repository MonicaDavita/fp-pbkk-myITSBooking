<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

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

Route::get('/detail', function() {
    return view('detail_fasilitas');
});

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('showloginform');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('login');

    Route::middleware('isadmin')->group(function() {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
   
        Route::get('/get-pemesanan/{id}', [AdminDashboardController::class, 'getPemesanan'])->name('getpemesanan');
        Route::get('/reject-pemesanan/{id}', [AdminDashboardController::class, 'rejectPemesanan'])->name('rejectpemesanan');
        Route::get('/accept-pemesanan/{id}', [AdminDashboardController::class, 'acceptPemesanan'])->name('acceptpemesanan');
        Route::get('/cancel-pemesanan/{id}', [AdminDashboardController::class, 'cancelPemesanan'])->name('cancelpemesanan');
        Route::get('/verify-pemesanan/{id}', [AdminDashboardController::class, 'verifyPemesanan'])->name('verifypemesanan');
    });
});


Route::middleware('auth')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('calendar', [CalendarController::class, 'index']);
    Route::post('fullcalenderAjax', [CalendarController::class, 'ajax']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/detail', function(){
    return view('detail_fasilitas');
});
Route::get('/booking', function(){
    return view('booking');
});
