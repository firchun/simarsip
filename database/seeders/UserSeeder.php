<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Administrator',
                'email' => 'admin@gmail.com',
                'level' => 'Administrator',
                'password' => Hash::make('admin'),
            ],
            [
                'username' => 'Sekretaris',
                'email' => 'sekretaris@gmail.com',
                'level' => 'Sekretaris',
                'password' => Hash::make('sekretaris'),
            ],
        ]);
    }
}