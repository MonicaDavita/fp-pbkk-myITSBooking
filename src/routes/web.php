<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;

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

Route::middleware('auth')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('calendar', [CalendarController::class, 'index']);
    Route::post('fullcalenderAjax', [CalendarController::class, 'ajax']);

    Route::get('/booking', function() {
        return view('booking');
    });
});