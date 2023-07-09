<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvanceMeta;

class AvanceController extends Controller
{
    /**
     * Mostrar el formulario de edición de avance.
     */
    public function edit(AvanceMeta $avance)
    {
        return view('metas.edit-avance', compact('avance'));
    }

    /**
     * Actualizar un avance en la base de datos.
     */
    public function update(Request $request, AvanceMeta $avance)
    {
        $request->validate([
            'avance' => 'required',
        ]);

        $avance->avance = $request->avance;
        $avance->save();

        return redirect()->route('metas.index')->with('success', 'Avance actualizado exitosamente.');
    }

}
