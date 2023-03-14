<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petugas = [
            [
                'nama_petugas' => 'Eko Setyono Wibowo',
                'username' => 'WebowoDev',
                'password' => Hash::make('password'),
                'telp' => '085791433907',
                'level' => 'petugas',
            ],
            [
                'nama_petugas' => 'Michael Winailan',
                'username' => 'Michael',
                'password' => Hash::make('password'),
                'telp' => '085791433907',
                'level' => 'admin',
            ],
        ];
        Petugas::insert($petugas);
    }
}
