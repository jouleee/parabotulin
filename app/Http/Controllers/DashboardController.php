<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pesan' => 'required',
        ]);

        Testimoni::create([
            'nama' => $request->nama,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan.');
    }
}
