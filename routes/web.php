<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeasingController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;

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
    return view('index');
})->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/garage', [GarageController::class, 'index'])->name('garage.index');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/leasing', [LeasingController::class, 'index'])->name('leasing.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/', [ServiceController::class, 'geometry'])->name('service.geometry');
Route::get('/service/', [ServiceController::class, 'accessories'])->name('service.accessories');
Route::get('/service/', [ServiceController::class, 'dumper'])->name('service.dumper');
Route::get('/service/', [ServiceController::class, 'conditions'])->name('service.conditions');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
