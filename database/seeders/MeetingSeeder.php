<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Models\Meeting;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $dummy=Faker::create('en_US');
        for($i=1;$i<=10;$i++){
            Meeting::create([
                'lokasi' => "ruang $i",
                'judul' => "judul $i",
                'tujuan' => $dummy->text(),
                'notulen' => $dummy->text(),
                'kesimpulan' => $dummy->text(),
                'file1'=>'1.jpg',
                'file2'=>'2.jpg',
                'file3'=>'3.jpg',
                'linklampiran'=>'https://www.google.com',
                'tanggalrapat' => $dt->setDateTime(2022, 3, 25, 22, 32, 5),
            ]);
        }
    }
}
