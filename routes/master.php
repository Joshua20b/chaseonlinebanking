<?php

use App\Http\Controllers\Dashboard\Master\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:master')->group(function () {
    /**
     * Dashboard Routes
     */
    Route::get('/master/dashboard', [DashboardController::class, 'index'])->name('master.dashboard');
});
