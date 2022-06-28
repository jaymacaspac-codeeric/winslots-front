<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\PaymentMethodController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::post('/login', [MainController::class, 'login'])->name('login');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');
Route::post('/session', [MainController::class, 'session'])->name('session');
Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
Route::get('/payment/method', [PaymentMethodController::class, 'index'])->name('payment.index');
