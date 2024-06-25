<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request): RedirectResponse {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home'); // Mengarahkan ke halaman home setelah login berhasil
        }
    
        $user = User::where('email', $credentials['email'])->first();
    
        if (!$user) {
            return back()->withErrors([
                'email' => 'Email not found.',
            ]);
        }
    
        if (!Hash::check($credentials['password'], $user->password)) {
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
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
