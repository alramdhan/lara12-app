<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        if(!Auth::check()) {
            return redirect('/')->with('toastMessage', 'Session timeout. Please login again.');
        }
    }

    public function index()
    {
        return view('home.page.dashboard');
    }
}
