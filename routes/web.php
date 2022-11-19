<?php

use Illuminate\Support\Facades\Route;
//memanggil file controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AritmatikaController;
//route sebelumnya
// Route::get('/', function () {
// return view('frontpage.landingpage');
// });
//route yang terbaru
Route::get('/', [HomeController::class, 'index']);
Route::get('/Aritmatika', [AritmatikaController::class, 'index']);
Route::post('/Aritmatika', [AritmatikaController::class, 'hasil']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/order', function () {
    return view('order');
});

require __DIR__ . '/auth.php';

