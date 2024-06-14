<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;



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
Route::get('/pesan', [BookingController::class, 'index'])->name('pesan');
Route::post('/pesan/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/riwayat', [BookingController::class, 'getBooking'])->name('riwayat');
Route::delete('/riwayatDelete/{id}', [BookingController::class, 'destroy'])->name('deleteRiwayat');
Route::get('/pesan/{id}/edit', [BookingController::class, 'edit'])->name('pesan.edit');
Route::put('/pesan/{id}', [BookingController::class, 'update'])->name('pesan.update');
