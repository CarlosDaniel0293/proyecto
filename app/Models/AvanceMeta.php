<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvanceMeta extends Model
{
    protected $table = 'avance_metas';
    protected $primaryKey = 'id_meta';

    protected $fillable = ['id_meta', 'avance'];

    public function meta()
    {
        return $this->belongsTo(Meta::class, 'id_meta');
    }
}
