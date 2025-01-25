<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Procesar el login
    public function login(Request $request)
    {
        $request->validate([
            'admin_email' => 'required|email',
            'admin_password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($request->only('admin_email', 'admin_password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard')->with('success', 'Inicio de sesión exitoso.');
        }

        return back()->withErrors([
            'admin_email' => 'Credenciales incorrectas.',
        ])->onlyInput('admin_email');
    }

    // Procesar el logout
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('success', 'Has cerrado sesión correctamente.');
    }   
}
