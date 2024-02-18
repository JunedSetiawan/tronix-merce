<?php

use App\Http\Controllers\Web\CustomerController;
use Illuminate\Support\Facades\Route;

Route::name('customer.')->middleware('auth')->prefix('customer')->group(function () {
    Route::get('account', [CustomerController::class, 'index'])->name('index');
});
