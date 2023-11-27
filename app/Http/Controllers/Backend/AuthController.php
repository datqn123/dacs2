<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }

    public function admin() {
        return view('backend.auth.login');
    }

    public function login(AuthRequest $authRequest) {
        $credentials = [
            'email' => $authRequest->input('email'),
            'password' => $authRequest->input('password')
        ];
        if(Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->with('success', 'Dang nhap thanh cong');
        }
        return redirect()->route('auth.admin')->with('error', 'Email hoac Mat khau khong chinh xac');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.admin');
    }
}