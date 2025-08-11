<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partisipasi_alumni extends Model
{
    //
    protected $primaryKey = 'id_partisipasi';

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'id_alumni', 'id_alumni');
    }

    public function eventAlumni()
    {
        return $this->belongsTo(Event_alumni::class, 'id_event', 'id_event');
    }

}
