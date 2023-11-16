<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

use App\Mail\ContactFormMail;
use illuminate\Support\Facades\Mail;

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
    return view('inicio');
});

Route::get('correo', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('correo', [ContactController::class, 'sendEmail'])->name('contact.send');
