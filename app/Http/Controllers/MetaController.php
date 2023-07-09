<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Meta;
use Illuminate\Http\Request;
use App\Models\AvanceMeta;

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
        $meta->id_empleado = $empleado->id;
        $meta->save();

        return redirect()->route('empleados.index')->with('success', 'Meta registrada exitosamente.');
    }

    /**
     * Mostrar el formulario de edición de una meta.
     */
    public function edit(Meta $meta)
    {
        return view('metas.edit', compact('meta'));
    }

    /**
     * Actualizar una meta en la base de datos.
     */
    public function update(Request $request, Meta $meta)
    {
        $request->validate([
            'meta' => 'required',
            'duracion' => 'required',
        ]);

        $meta->meta = $request->meta;
        $meta->duracion = $request->duracion;
        $meta->save();

        return redirect()->route('metas.index')->with('success', 'Meta actualizada exitosamente.');
    }

    /**
     * Mostrar todas las metas.
     */
    public function index()
        {
            $metas = Meta::all();
            $avance = null; // Agregar esta línea para definir la variable $avance
            return view('metas.index', compact('metas', 'avance'));
        }           

    /**
     * Eliminar una meta de la base de datos.
     */
    public function delete(Meta $meta)
    {
        $meta->delete();
        return redirect()->route('metas.index')->with('success', 'Meta eliminada exitosamente.');
    }

    /**
     * Mostrar el formulario de registro de avance.
     */
    public function createAvance(Meta $meta)
    {
        return view('metas.avances-create', compact('meta'));
    }

    /**
     * Registrar un avance para una meta.
     */
    public function storeAvance(Request $request, Meta $meta)
    {
        $request->validate([
            'avance' => 'required',
        ]);

        $avance = new AvanceMeta();
        $avance->avance = $request->avance;
        $avance->meta_id = $meta->id;
        $avance->save();

        return redirect()->route('metas.index')->with('success', 'Avance registrado exitosamente.');
    }

    /**
     * Mostrar el formulario de edición de un avance.
     */
    public function editAvance(AvanceMeta $avance)
    {
        return view('metas.edit-avance', compact('avance'));
    }

    /**
     * Actualizar un avance en la base de datos.
     */
    public function updateAvance(Request $request, AvanceMeta $avance)
    {
        $request->validate([
            'avance' => 'required',
        ]);

        $avance->avance = $request->avance;
        $avance->save();

        return redirect()->route('metas.index')->with('success', 'Avance actualizado exitosamente.');
    }

    /**
     * Eliminar un avance de la base de datos.
     */
    public function destroyAvance(AvanceMeta $avance)
    {
        $avance->delete();
        return redirect()->route('metas.index')->with('success', 'Avance eliminado exitosamente.');
    }
}
