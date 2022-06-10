<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LapanganUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        lapanganUsaha::create([
            'wilayah'=>'Banyumas',
            'industripengolahan'=>'',
         ]);
    }
}
