<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Pengguna extends Model
{
    use HasFactory, HasRoles;

    protected $guarded = ["id"];
    protected $guard_name = "web";

    // protected $fillable = [
    //   'name',
    //   'nim',
    //   'last_login'  
    // ];
}
