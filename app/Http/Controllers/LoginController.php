<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if ($user = Auth::user()) {
            if ($user -> level == 1) {
                return redirect()->intended('beranda');
            }
            elseif ($user -> level == 2) {
                return redirect()->intended('kasir');
            }
        }
        return view('login.view_login');
    }

    public function proses(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],
        [
            'username.required' => 'Maaf username yang anda masukkan salah',
            'password.required' => 'Maaf password yang anda masukkan salah'
        ]);

        return back()->withErrors([
            'username' => 'maaf username atau password anda salah'
        ])->onlyInput('username');
    }
}
