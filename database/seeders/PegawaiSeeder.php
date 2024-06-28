<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Juan Juantoro',
            'jenis_kelamin' => 'Laki-Laki',
            'usia' => 27,
            'id_departemen' => 2,
            'alamat' => "Jalan Suka Makmur No. 7"
        ]);
    }
}
