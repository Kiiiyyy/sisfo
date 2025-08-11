<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Model
{
    //
    protected $primaryKey = 'id_admin';
    public function user() {
        return $this->belongsTo(User::class,'id_user', 'id_user');

    }

    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'id_admin', 'id_admin');
    }

}
