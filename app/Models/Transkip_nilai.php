<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transkip_nilai extends Model
{
    //
    protected $primaryKey = 'id_transkip';

    public function student()
    {
        return $this->belongsTo(Student::class, 'id_mahasiswa', 'id_mahasiswa');
    }

}
