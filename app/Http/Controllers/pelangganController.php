<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class pelangganController extends Controller
{
    public function create()
    {
        return view('createpelanggan');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email:dns|unique:pelanggan',
            'password' => 'required|string|min:8',
            'no_telp' => 'required|string|max:15',
            'alamat' => 'required|string',
        ]);

        Pelanggan::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'no_telp' => $validated['no_telp'],
            'alamat' => $validated['alamat'],
        ]);

        User::create([
            'name' => $validated['nama'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('login')->with('success', 'Pelanggan berhasil ditambahkan');
    }

}
