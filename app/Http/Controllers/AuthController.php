<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
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
        $isEmailExist = User::where('email', $request->email)->first();
        if($isEmailExist) {
            $credentials = $request->validated();
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();

                return redirect()->intended('/dashboard')->with('toastSuccess', 'Succesfully');
            }

            return back()->withErrors(['errorMessage' => 'Username or Password in wrong!']);
        }

        return back()->withErrors(['errorMessage' => 'Account not registered!']);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('toasstSuccess', 'Logout Successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
