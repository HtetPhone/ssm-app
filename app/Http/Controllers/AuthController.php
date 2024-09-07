<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::attempt($data)) {
            throw ValidationException::withMessages([
                'email' => 'Wrong Credentials!'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('dashboard')->with(['success' => "Successfully Logged In!!"]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
