<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Dosen extends Model
{
    protected $primaryKey = 'id_dosen';

    public function user() {
        return $this->belongsTo(User::class,'id_user', 'id_user');
    }

    public function mata_kuliah()
    {
        return $this->hasMany(Mata_kuliah::class, 'id_dosen', 'id_dosen');
    }

    public function ujian()
    {
        return $this->hasMany(Ujian::class, 'id_dosen', 'id_dosen');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id_dosen', 'id_dosen');
    }

    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'id_dosen', 'id_dosen');
    }
}
