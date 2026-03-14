<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionGenerator extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Transaction Generator',
        ];
        return view('dashboard.admin.transaction_generator.index', $data);
    }
    public function generateSingleTransaction(Request $request)
    {
        try {
            //code...
        } catch (\Exception $e) {
            //throw $th;
        }
    }
    public function generateMultipleTransaction(Request $request)
    {
        try {
            //code...
        } catch (\Exception $e) {
            //throw $th;
        }
    }
}
