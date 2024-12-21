<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input login
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Cek apakah email dan password cocok
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect()->intended('main');  // Redirect ke halaman utama setelah login
        }

        return back()->withErrors([
            'usename' => 'Username atau password salah.',
        ]);
    }
}
