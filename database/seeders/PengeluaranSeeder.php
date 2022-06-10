<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pengeluaran;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pengeluaran::create([
            'wilayah'=>'Banyumas',
            'rumahtangga'=>'1.85',
            'lnprt'=>'2.27',
            'pemerintah'=>'2.19',
            'bruto'=>'7.54',
            'inventori'=>'-28.43',
            'eksporbarangjasa'=>'-0.50',
            'pdrb'=>'4.00'
         ]);
         pengeluaran::create([
            'wilayah'=>'Banjarnegara',
            'rumahtangga'=>'1.83',
            'lnprt'=>'1.12',
            'pemerintah'=>'0.63',
            'bruto'=>'6.76',
            'inventori'=>'-33.17',
            'eksporbarangjasa'=>'-17.02',
            'pdrb'=>'3.26'
         ]);
         pengeluaran::create([
            'wilayah'=>'Cilacap',
            'rumahtangga'=>'1.69',
            'lnprt'=>'1.23',
            'pemerintah'=>'0.83',
            'bruto'=>'5.55',
            'inventori'=>'-31.26',
            'eksporbarangjasa'=>'1.74',
            'pdrb'=>'2.15'
         ]);
         pengeluaran::create([
            'wilayah'=>'Purbalingga',
            'rumahtangga'=>'1.67',
            'lnprt'=>'1.20',
            'pemerintah'=>'0.76',
            'bruto'=>'6.11',
            'inventori'=>'-28.12',
            'eksporbarangjasa'=>'-43.57',
            'pdrb'=>'3.19'
         ]);
         
    }
}
