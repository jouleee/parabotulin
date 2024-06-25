<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\KategoriAlat;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index(){
        $data = KategoriAlat::all();

        return view('collection', compact('data'));
    }

    public function showByCategory($nama_kategori)
    {
        $kategori = KategoriAlat::where('nama_kategori', $nama_kategori)->first();

        if (!$kategori) {
            abort(404, 'Kategori tidak ditemukan');
        }
        
        
        $data = Alat::where('kategori_id', $kategori->id)->get();

        return view('show', compact('data', 'nama_kategori'));
    }

}
