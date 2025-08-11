<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    //
    protected $primaryKey = 'id_nilai';

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Mata_kuliah::class, 'id_mk', 'id_mk');
    }

}
