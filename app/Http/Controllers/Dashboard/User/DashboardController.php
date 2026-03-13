<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'User Dashboard',
        ];
        return view('dashboard.user.index', $data);
    }
}
