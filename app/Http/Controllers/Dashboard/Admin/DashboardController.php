<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'countUsers' => User::where('role', 'user')->count(),
            'countTransactions' => 0,
        ];
        return view('dashboard.admin.index', $data);
    }
}
