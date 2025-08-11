<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    //
    protected $primaryKey = 'id_tugas';
    public function mata_kuliah()
    {
        return $this->belongsTo(Mata_kuliah::class, 'id_mk', 'id_mk');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }

    public function tugas_mahasiswa()
    {
        return $this->hasOne(Tugas_mahasiswa::class, 'id_tugas', 'id_tugas');
    }
}