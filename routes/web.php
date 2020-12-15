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

Route::get('/', function () {
    return view('mainPage');
})->name('mainPage');

Auth::routes();

Route::get('/messageForm', [App\Http\Controllers\MessageController::class, 'messageForm'])->name('messageForm');
Route::post('/saveMessage', [App\Http\Controllers\MessageController::class, 'save'])->name('saveMessage');
