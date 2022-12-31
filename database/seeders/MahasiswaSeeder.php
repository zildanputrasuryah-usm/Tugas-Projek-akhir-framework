<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //NIM	Nama	Semester	Prodi	Fakultas
    public function run()
    {
        \DB::table('mahasiswa')->insert([
            'NIM'=>'G.211.20.0099',
            'Nama'=>'Zildan Putra Surya',
            'Semester'=>'5',
            'Prodi'=>'Teknik Informatika',
            'Fakultas'=>'FTIK',    
        ]);
    }
}
