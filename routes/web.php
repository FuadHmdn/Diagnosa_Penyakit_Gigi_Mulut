<?php

use App\Http\Controllers\DiagnosaController;
use Illuminate\Support\Facades\Route;

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
    return view('landingpage');
})->name('landingpage');

Route::get('/form-diagnosis', [DiagnosaController::class, 'index'])->name('form.diagnosis'); // Menampilkan form input
Route::post('/diagnosa', [DiagnosaController::class, 'diagnosa'])->name('diagnosa');