<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function showBookings()
    {
        $user = auth()->user();
        $bookings = Penyewaan::where('pelanggan_id', $user->id)->get();
        return view('chart', compact('bookings'));
    }
}
