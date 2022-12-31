<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MakulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //makul	Dosen	SKS	Hari	Ruang	
    public function run()
    {
        \DB::table('makul')->insert([
            'makul'=>'Manajemen Routing',
            'Dosen'=>'Djoko S.kom., M.kom',
            'SKS'=>'4',
            'Hari'=> 'Kamis',
            'Ruang'=>'Q.1.2',
        ]);
    }
}
