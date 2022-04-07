<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use Carbon\Carbon;
use Faker\Factory as Faker;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new Carbon();
        $date1 = new Carbon();
        $dummy=Faker::create('en_US');
        Agenda::create([
           'email' => 'admin@email.com',
           'title' => 'kegiatan1',
           'keterangan' => $dummy->text(),
           'file1'=>'1.jpg',
           'file2'=>'2.jpg',
           'file3'=>'3.jpg',
           'linklampiran'=>'https://www.google.com',
           'start'=>$date->setDate(2022, 04, 07),
            'end' => $date1->setDate(2022, 04, 10),
        ]);
        $dummy=Faker::create('en_US');
        $dt = new Carbon();
        $dt1 = new Carbon();
        Agenda::create([
            'email' => 'user@email.com',
            'title' => 'kegiatan2',
            'keterangan' => $dummy->text(),
            'file1'=>'1.pdf',
            'file2'=>'2.pdf',
            'file3'=>'3.pdf',
            'linklampiran'=>'https://www.bing.com',
            'start'=>$dt->setDate(2022, 04, 07),
             'end' => $dt1->setDate(2022, 04, 12),
         ]);
    }
}
