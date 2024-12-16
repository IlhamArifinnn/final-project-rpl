<?php

namespace App\Http\Controllers;

use App\Models\ChildData;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $childCount = ChildData::count();

        return view('dashboard', compact('childCount'));
    }
}
