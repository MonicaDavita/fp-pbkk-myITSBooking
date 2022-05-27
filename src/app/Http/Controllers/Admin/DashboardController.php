<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $adminId = auth()->guard('admin')->user()->id;
        
        $transactions = Transaction::where('admin_id', $adminId)->get();
        
        return view('admin.dashboard', compact('transactions'));
    }
}
