<?php

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

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

Route::get('/', [PagesController::class, 'getWelcome'])->name('pages.welcome');
Route::get('index', [PagesController::class, 'getIndex'])->name('pages.index');
Route::get('about', [PagesController::class, 'getAbout'])->name('pages.about');
Route::get('contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('contact', [ContactController::class, 'sendEmail'])->name('contact.send');
