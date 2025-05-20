<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $data = array_map('strip_tags', $validasi);
        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    
        return back()->with('error', 'Username atau Password Salah!. Cek kembali Username dan Password anda!');
    }
}
