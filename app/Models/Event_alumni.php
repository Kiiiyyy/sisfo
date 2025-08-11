<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event_alumni extends Model
{
    //
    protected $primaryKey = 'id_event';
    
    public function partisipasiAlumni()
    {
        return $this->hasMany(Partisipasi_alumni::class, 'id_event', 'id_event');
    }

}
