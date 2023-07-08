<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Handle user registration.
     */
    public function register(Request $request)
    {
        // Validar los datos enviados por el formulario de registro
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear un nuevo usuario en la base de datos
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Realizar cualquier otra acción que desees después de registrar al usuario

        // Redireccionar a una página de éxito o mostrar un mensaje de confirmación
        return redirect('/')->with('success', 'Registro exitoso. ¡Bienvenido!');
    }
}
