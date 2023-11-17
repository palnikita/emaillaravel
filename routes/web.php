<?php

use App\Http\Controllers\EmailController;
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
    return view('welcome');
});
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/send', [EmailController::class, 'send'])->name('send');
Route::get('/form', [EmailController::class, 'form'])->name('form');
