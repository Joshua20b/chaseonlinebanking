<?php

namespace App\Http\Controllers\Dashboard\Master;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('dashboard.master.index', $data);
    }
}
