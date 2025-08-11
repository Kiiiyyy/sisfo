<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    protected $primaryKey = 'id_mahasiswa';

    public function tugasMahasiswas( ) {

        return $this->hasOne(tugas_mahasiswa::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    public function user()  {
        return $this->belongsTo(User::class,'id_user', 'id_user');
    }

    public function presensi()
    {
        return $this->hasOne(Presensi::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_mk', 'id_mk');
    }

    public function krs()
    {
        return $this->hasMany(KRS::class, 'id_mk', 'id_mk');
    }

    public function transkipNilai()
    {
        return $this->hasOne(Transkip_nilai::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    public function alumni()
    {
        return $this->hasOne(Alumni::class, 'id_mahasiswa', 'id_mahasiswa');
    }

    public function keuangan()
    {
        return $this->hasMany(Keuangan::class, 'id_mahasiswa',  'id_mahasiswa');
    }


}