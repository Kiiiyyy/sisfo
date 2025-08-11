<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    //
    protected $primaryKey = 'id_alumni';

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    public function partisipasiAlumni()
    {
        return $this->hasOne(Partisipasi_alumni::class, 'id_alumni', 'id_alumni');
    }

}
