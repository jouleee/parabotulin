<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriAlat;
use App\Models\Alat;
use App\Models\Penyewaan;

class BookingController extends Controller
{
    // Method untuk menampilkan form booking
    public function create()
    {
        $kategori_alat = KategoriAlat::all();
        return view('booking', compact('kategori_alat'));
    }

    // Method untuk menyimpan data booking
    public function store(Request $request)
    {
        $request->validate([
            'kategori_alat' => 'required',
            'alat_id' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'total_harga' => 'required|numeric',
            'pelanggan_id' => 'required|exists:users,id',
        ]);

        // Update status alat menjadi 'tidak tersedia'
        $alat = Alat::find($request->alat_id);
        $alat->status = 'tidak tersedia';
        $alat->save();

        // Buat penyewaan dengan status 'disewa'
        Penyewaan::create([
            'kategori_alat' => $request->kategori_alat,
            'alat_id' => $request->alat_id,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'total_harga' => $request->total_harga,
            'pelanggan_id' => $request->pelanggan_id,
            'status' => 'disewa',
        ]);

        return redirect()->route('booking.create')->with('success', 'Booking berhasil dibuat.');
    }


    // Method untuk mendapatkan daftar alat berdasarkan kategori
    public function getAlatByKategori($kategoriId)
    {
        $alat = Alat::where('kategori_id', $kategoriId)->where('status', 'tersedia')->get();
        return response()->json($alat);
    }

    public function return($id)
    {
        $booking = Penyewaan::findOrFail($id);
        
        // Ubah status penyewaan menjadi 'dikembalikan'
        $booking->status = 'dikembalikan';
        $booking->save();

        // Ubah status alat menjadi 'tersedia'
        $alat = Alat::findOrFail($booking->alat_id);
        $alat->status = 'tersedia';
        $alat->save();

        return redirect()->back()->with('success', 'Penyewaan berhasil dikembalikan.');
    }
}
