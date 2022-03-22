<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jenisIKU;

class JenisikuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        jenisIKU::create([
            'jenisdesc'=>'IKU Implementasi',
         ]);
         jenisIKU::create([
            'jenisdesc'=>'IKU Rekomendasi',
         ]);
         jenisIKU::create([
            'jenisdesc'=>'IKU Asesmen',
         ]);
         jenisIKU::create([
            'jenisdesc'=>'IKU Data/Informasi',
         ]);
         jenisIKU::create([
            'jenisdesc'=>'IKU Manajemen',
         ]);
    }
}
