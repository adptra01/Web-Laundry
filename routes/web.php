<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('categories')->group(function () {

    Route::get('/', [CategoryController::class, 'index'])->name('categories');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{id}/show', [CategoryController::class, 'show'])->name('categories.show');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

});

Route::prefix('services')->group(function () {

    Route::get('/', [ServiceController::class, 'index'])->name('services');
    Route::post('/', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/{id}/show', [ServiceController::class, 'show'])->name('services.show');
    Route::put('/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

});

Route::prefix('transactions')->group(function () {

    Route::get('/', [TransactionController::class, 'index'])->name('transactions');
    Route::post('/', [TransactionController::class, 'store'])->name('transactions.store');
    Route::get('/{id}/show', [TransactionController::class, 'show'])->name('transactions.show');
    Route::delete('/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');

    Route::get('/report', [TransactionController::class, 'report'])->name('transactions.report');
    Route::put('/{id}', [TransactionController::class, 'update'])->name('transactions.update');
    Route::put('/{id}/payment', [TransactionController::class, 'payment'])->name('transactions.payment');
    Route::get('/{id}/invoice', [TransactionController::class, 'invoice'])->name('transactions.invoice');
});

