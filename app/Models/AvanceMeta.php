<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvanceMeta extends Model
{
    protected $table = 'avance_meta';

    public function meta()
    {
        return $this->belongsTo(Meta::class, 'id_meta');
    }
}
