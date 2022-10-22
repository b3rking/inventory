<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    
    public function dashboard() {
        return view('app.dashboard');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/auth/login');
    }
}
