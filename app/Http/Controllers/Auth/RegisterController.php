<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Vista del formulario de registro
    }

    public function register(Request $request)
    {
        // Validación de los datos
        $validator = Validator::make($request->all(), [
            'admin_name' => 'required|string|max:40',
            'admin_email' => 'required|string|email|max:60|unique:admin,admin_email',
            'admin_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Crear el usuario
        $admin = Admin::create([
            'admin_name' => $request->admin_name,
            'admin_email' => $request->admin_email,
            'admin_password' => Hash::make($request->admin_password),
        ]);

        // Autenticación automática después del registro (opcional)
        //auth()->login($admin);

        return redirect('/dashboard')->with('success', 'Registro exitoso.');
    }
}
