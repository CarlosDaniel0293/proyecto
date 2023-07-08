<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    public function metas()
    {
        return $this->hasMany(Meta::class, 'id_empleado');
    }
}
