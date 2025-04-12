<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = DB::table('pembeli')->where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan data user ke session
            $request->session()->put('user', [
                'id' => $user->id_pembeli,
                'username' => $user->username,
                'name' => $user->name,
            ]);

            return redirect()->route('home')->with('success', 'Login berhasil!');
        } else {
            return back()->withErrors(['login_error' => 'Username atau password salah.']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}
