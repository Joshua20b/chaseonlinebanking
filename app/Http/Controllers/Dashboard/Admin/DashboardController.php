<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard',
        ];
        return view('dashboard.admin.index', $data);
    }
}
