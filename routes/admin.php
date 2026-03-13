<?php

use App\Http\Controllers\Dashboard\Admin\DashboardController;
use App\Http\Controllers\Dashboard\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth', 'role:admin')->group(function () {
    /**
     * Admin Dashboard
     * Route: /admin/dashboard
     */
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    /**
     * Admin Users
     * Route: /admin/users
     */
    Route::resource('user', UserController::class)->names('admin.users');
});
