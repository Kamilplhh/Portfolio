<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HistoryController;
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
    return view('Home');
});

Route::get('/Projects', [ProjectController::class, 'getAll']);

Route::get('/CV', [HistoryController::class, 'getAll']);


Route::get('/Contact', function () {
    return view('Contact');
});

Route::post('/Contact', [ContactController::class, 'sendEmail'])->name('send.email');