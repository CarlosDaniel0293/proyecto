<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Mostrar la lista de empleados.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Mostrar el formulario de registro de empleado.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Guardar un nuevo empleado en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'celular' => 'required',
        ]);

        $empleado = new Empleado();
        $empleado->nombres = $request->nombres;
        $empleado->apellidos = $request->apellidos;
        $empleado->correo = $request->correo;
        $empleado->celular = $request->celular;
        $empleado->save();

        return redirect()->route('empleados.index')->with('success', 'Empleado registrado exitosamente.');
    }

    /**
     * Mostrar el formulario de edición de empleado.
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Actualizar los datos de un empleado en la base de datos.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'celular' => 'required',
        ]);

        $empleado->nombres = $request->nombres;
        $empleado->apellidos = $request->apellidos;
        $empleado->correo = $request->correo;
        $empleado->celular = $request->celular;
        $empleado->save();

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado exitosamente.');
    }

    /**
     * Mostrar el formulario de confirmación de eliminación de empleado.
     */
    public function delete(Empleado $empleado)
    {
        return view('empleados.confirm-delete', compact('empleado'));
    }

    /**
     * Eliminar un empleado de la base de datos.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado exitosamente.');
    }
}
