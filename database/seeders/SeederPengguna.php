<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pengguna;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class SeederPengguna extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultUserMhs = User::create([
            "name" => "Mahasiswa",
            "email" => "mhs@example.com",
            "password" => bcrypt("password123"),
        ]);

        $defaultUserDosen = User::create([
            "name" => "Dosen",
            "email" => "dosen@example.com",
            "password" => bcrypt("password123"),
        ]);

        $defaultUserAdmin = User::create([
            "name" => "Admin",
            "email" => "admin@example.com",
            "password" => bcrypt("password123"),
        ]);



        $roleMahasiswa = Role::create(
            [
                "name" => "Mahasiswa"
            ]
        );
        $roleDosen = Role::create(
            [
                "name" => "Dosen"
            ]
        );
        $roleAdmin = Role::create(
            [
                "name" => "Admin"
            ]
        );


        $defaultUserMhs->assignRole($roleMahasiswa);
        $defaultUserDosen->assignRole($roleDosen);
        $defaultUserAdmin->assignRole($roleAdmin);

        $defaultPenggunaMhs = Pengguna::create([
            "nim" => "111111111",
            "nama" => "John",
            "last_login" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $defaultPenggunaMhs->assignRole($roleMahasiswa);
    }
}
