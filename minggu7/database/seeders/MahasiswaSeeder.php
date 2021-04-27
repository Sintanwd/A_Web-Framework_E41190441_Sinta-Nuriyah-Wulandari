<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use db;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('mahasiswa')->insert([
            'name' => 'Sinta Nuriyah Wulandari',
            'alamat' => "Dusun Kurban RT 002/RW 006, Desa Gading, Kec Winongan, Kab Pasuruan",
            'jenis_kelamin' => 1,
            'prodi' => 1,
            'no_hp' => "085235138387"
        ]);
    }
}
