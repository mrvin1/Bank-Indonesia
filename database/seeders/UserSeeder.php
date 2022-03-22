<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1,
            'nip' => '0000000000'
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => bcrypt('user123'),
            'role_id' => 2,
            'nip' => '111111111'
        ]);
    }
}
