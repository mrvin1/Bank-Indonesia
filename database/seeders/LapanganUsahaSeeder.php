<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\lapanganUsaha;

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
            'wilayah'=>'Jawa Tengah',
            'industripengolahan'=>'4.53',
            'pertanian'=>'4.67',
            'perdagangan'=>'3.62',
            'konstruksi'=>'-0.06',
         ]);
        lapanganUsaha::create([
            'wilayah'=>'Banyumas',
            'industripengolahan'=>'3.75',
            'pertanian'=>'0.94',
            'perdagangan'=>'6.06',
            'konstruksi'=>'7.62',
         ]);
         lapanganUsaha::create([
            'wilayah'=>'Cilacap',
            'industripengolahan'=>'5.33',
            'pertanian'=>'-1.49',
            'perdagangan'=>'4.59',
            'konstruksi'=>'5.33',
         ]);
         lapanganUsaha::create([
            'wilayah'=>'Purbalingga',
            'industripengolahan'=>'3.80',
            'pertanian'=>'1.20',
            'perdagangan'=>'5.68',
            'konstruksi'=>'6.95',
         ]);
         lapanganUsaha::create([
            'wilayah'=>'Banjarnegara',
            'industripengolahan'=>'3.80',
            'pertanian'=>'1.20',
            'perdagangan'=>'5.68',
            'konstruksi'=>'6.95',
         ]);
    }
}
