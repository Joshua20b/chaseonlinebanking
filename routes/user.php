<?php

use App\Http\Controllers\Dashboard\User\DashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    /**
     * User Dashboard
     * Route: /user/dashboard
     */
    Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
});