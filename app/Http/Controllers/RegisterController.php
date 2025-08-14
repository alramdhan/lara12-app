<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $isEmailExist = User::where('email', $request->email)->first();
        if(!$isEmailExist)
        {
            $data = $request->validated();
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            
            return redirect()->intended('/')->with('toastSuccess', 'Register Succesfully');
        }

        return back()->withErrors(['errorMessage' => 'Email telah digunakan!']);
    }
}
