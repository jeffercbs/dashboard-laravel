<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    //
    public function show()
    {
        if (!Auth::check()) {
            return redirect()->to('/login');
        }

        return view("dashboard.index");
    }
}
