<?php

namespace App\Http\Controllers;

use App\Models\UserLoggedIn;

class DashboardController extends Controller
{
    public function index()
    {
        $recentLogins = UserLoggedIn::with('user')
            ->orderByDesc('created_at')
            ->take(10)
            ->get();

        return view('dashboard', compact('recentLogins'));
    }
    
}
