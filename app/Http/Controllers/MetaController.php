<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Mostrar el formulario de registro de meta.
     */
    public function create(Empleado $empleado)
    {
        return view('metas.create', compact('empleado'));
    }

    /**
     * Guardar una nueva meta en la base de datos.
     */
    public function store(Request $request, Empleado $empleado)
    {
        $request->validate([
            'meta' => 'required',
            'duracion' => 'required',
        ]);

        $meta = new Meta();
        $meta->meta = $request->meta;
        $meta->duracion = $request->duracion;
        $meta->empleado_id = $empleado->id;
        $meta->save();

        return redirect()->route('empleados.index')->with('success', 'Meta registrada exitosamente.');
    }

    // Resto de las funciones del controlador...

}
