<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function __construct()
    {
        if(Auth::check()) {
            $user = Auth::user();
            return redirect('/dashboard')->with('toastSuccess', 'Welcome Back, '.$user->name);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * A user doing a login session
     */
    public function doAuthentication(LoginRequest $request)
    {
        $isEmailExist = User::where('email', $request->email)
            ->where('is_status', 1)
            ->first();
        
        if($isEmailExist) {
            $credentials = $request->validated();
            $remember = $request->has('rememberMe');
            if(Auth::attempt($credentials, $remember))
            {
                $request->session()->regenerate();
                $user = Auth::user();

                return redirect()->intended('admin/dashboard')->with('toastSuccess', 'Welcome back, '.$user->name);
            }

            return back()->withErrors(['errorMessage' => 'Username or Password is wrong!']);
        }

        return back()->withErrors(['errorMessage' => 'Account not registered!']);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('toastSuccess', 'Logout Successfully');
    }
}
