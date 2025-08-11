<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    //
    protected $primaryKey = 'id_presensi';

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_mahasiswa', 'id_mahasiswa');
    }
}
