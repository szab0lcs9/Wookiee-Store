<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember_me = $request->filled('remember_me');

        if (!Auth::attempt($credentials, $remember_me))
        {
            throw ValidationException::withMessages([
                'email' => __('Invalid email address or password.'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended();
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
