<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function mostrarLogin()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard.indice');
        }
        return view('auth.login');
    }

   /*
    public function mostrarRegister()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard.indice');
        }
        return view('auth.register');
    }
        */
    public function criar()
    {
        // Esta view deve ser criada em resources/views/admin/utilizadores/criar.blade.php
        return view('admin.utilizadores.criar');
    }


    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.indice');
        }

        return back()->withErrors([
            'email' => 'As credenciais não correspondem aos registos.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'nome' => $validated['nome'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => false,
        ]);

        Auth::login($user);

        return redirect()->route('dashboard.indice');
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('pagina-inicial');
    }
}
