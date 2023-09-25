<?php

use App\Http\Controllers\EventPromotorController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['middleware' => ['role:promotor']], function () {
        Route::get('/event/add', [EventPromotorController::class , 'addEvent'])->name('add.event');
        Route::get('/event/show', [EventPromotorController::class , 'showEvent'])->name('show.event');
    });

    Route::group(['middleware' => ['role:general']], function () {
        Route::get('/ticket/buy', [TicketController::class , 'buyTicket'])->name('buy.ticket');
        Route::get('/ticket/my', [TicketController::class , 'myTicket'])->name('my.ticket');
    });
});
