<?php

use App\Http\Controllers\Manager;
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
})->name('home');

Route::get('/login', [Manager::class, 'login'])->name('login');

Route::post('/login', [Manager::class, 'loginPost'])->name('login.post');

Route::get('/applicationform', [Manager::class, 'applicationform'])->name('applicationform');

Route::get('/registration',[Manager::class, 'registration'])->name('registration');

Route::post('/registration', [Manager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [Manager:: class, 'logout'])->name('logout');;