<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Menampilkan halaman edit profil
    public function edit()
    {
        $user = Auth::user(); // Mengambil data user yang sedang login
        return view('edit', ['user' => $user]); // Kirim ke view
    }

    // Proses update profil
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cat_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'cat_name' => $request->input('cat_name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ]);

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}
