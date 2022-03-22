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
        $dt = Carbon::now();
        $dummy=Faker::create('en_US');
        Agenda::create([
           'email' => 'admin@email.com',
           'aktivitas' => $dummy->text(),
           'keterangan' => $dummy->text(),
           'file1'=>'1.jpg',
           'file2'=>'2.jpg',
           'file3'=>'3.jpg',
           'linklampiran'=>'https://www.google.com',
            'deadline' => $dt->setDateTime(2024, 3, 25, 22, 32, 5),
        ]);
        $dummy=Faker::create('en_US');
        Agenda::create([
            'email' => 'user@email.com',
            'aktivitas' => $dummy->text(),
            'keterangan' => $dummy->text(),
            'file1'=>'1.pdf',
            'file2'=>'2.pdf',
            'file3'=>'3.pdf',
            'linklampiran'=>'https://www.bing.com',
             'deadline' => $dt->setDateTime(2022, 3, 25, 22, 32, 5),
         ]);
    }
}
