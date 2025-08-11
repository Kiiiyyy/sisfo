<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    //
    protected $primaryKey = 'id_mk';
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'id_mk', 'id_mk');
    }   

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen', 'id_dosen');
    }

    public function ujian()
    {
        return $this->hasMany(Ujian::class, 'id_mk', 'id_mk');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_mk', 'id_mk');
    }

    public function nilai()
    {
        return $this->hasOne(Nilai::class, 'id_mk', 'id_mk');
    }

    public function krs()
    {
        return $this->hasMany(KRS::class, 'id_mk', 'id_mk');
    }



}
