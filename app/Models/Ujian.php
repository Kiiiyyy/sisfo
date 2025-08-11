<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $primaryKey = 'id_ujian';
    
    public function matakuliah()
    {
        return $this->belongsTo(Mata_kuliah::class, 'id_mk', 'id_mk');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }
}
