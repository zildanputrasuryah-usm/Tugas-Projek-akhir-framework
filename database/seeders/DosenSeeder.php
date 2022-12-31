<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dosen')->insert([
            'NIDN' => '2201548756',
            'Nama' => 'Djoko S.h.,M.kom',
            'Pendidikan' => 'S3',
            'Makul' => 'Pendidikan Kewarganegaraan',
            'Status' => 'PNS',
        ]);
    }
}
