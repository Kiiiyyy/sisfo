<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $primaryKey = 'id_jadwal';

    public function mataKuliah()
    {
        return $this->belongsTo(Mata_kuliah::class, 'id_mk', 'id_mk');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class, 'id_jadwal', 'id_jadwal');
    }
}
