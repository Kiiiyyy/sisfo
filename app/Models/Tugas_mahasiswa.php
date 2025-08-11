<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tugas_mahasiswa extends Model
{
    //      
    protected $primaryKey = 'id_tugas_mahasiswa';

    public function student () : BelongsTo {
        return $this->belongsTo(Student::class,     'id_mahasiswa', 'id_mahasiswa');
    }

    public function tugas() : BelongsTo {
        return $this->belongsTo(Tugas::class, 'id_tugas', 'id_tugas');
    }


}
