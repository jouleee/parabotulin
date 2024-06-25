<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Alat;
use App\Models\KategoriAlat;
use App\Models\Penyewaan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm(){
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin'); // Mengarahkan ke halaman admin home setelah login berhasil
        }
    
        $admin = Admin::where('email', $credentials['email'])->first();
    
        if (!$admin) {
            return back()->withErrors([
                'email' => 'Email not found.',
            ]);
        }
    
        if (!Hash::check($credentials['password'], $admin->password)) {
            return back()->withErrors([
                'password' => 'Incorrect password.',
            ]);
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
    }

    public function index()
    {
        $bookings = Penyewaan::selectRaw('DATE(created_at) as date, SUM(total_harga) as total_harga')
            ->orderByDesc('created_at')
            ->groupBy('date')
            ->get(); 

        $kategori = KategoriAlat::all();

        $totalIncome = $bookings->sum('total_harga');

        return view('admin.index', compact('bookings', 'kategori', 'totalIncome'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga_sewa_per_hari' => 'required|numeric',
            'kategori_id' => 'required|exists:kategori_alat,id',
            'status' => 'required|in:tersedia,tidak tersedia',
            'image' => 'required|image|mimes:png|max:2048',
        ]);

        $namaAlat = $request->nama_alat;
        $imageName = $namaAlat . '.png';
        $request->image->move(public_path('images'), $imageName);

        Alat::create([
            'nama_alat' => $namaAlat,
            'deskripsi' => $request->deskripsi,
            'harga_sewa_per_hari' => $request->harga_sewa_per_hari,
            'kategori_id' => $request->kategori_id,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.index')->with('success', 'Alat berhasil ditambahkan.');
    }
}
