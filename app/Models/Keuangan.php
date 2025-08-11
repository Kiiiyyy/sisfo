<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    //
    protected $primaryKey = 'id_keuangan';

    public function mahasiswa()
    {
        return $this->belongsTo(Student::class, 'id_mahasiswa', 'id_mahasiswa');
    }
}
