<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'username' => 'required|unique:users,username|max:255',
            'name' => 'required|string|max:255',  // Pastikan 'name' ada di sini
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);
    
        // Menyimpan pengguna baru
        User::create([
            'username' => $validated['username'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);
    
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
    }
    
}
