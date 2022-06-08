<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facility;

class DashboardController extends Controller
{
    public function index(Request $request, $category = null)
    {
        $facilities = null;

        if($category)
            $facilities = Facility::where('category', $category)->get();
        else
            $facilities = Facility::all();

        return view('dashboard', [
            "facilities" => $facilities,
            "category" => $category
        ]);
    }
}
