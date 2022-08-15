<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'email' => 'anwarsanusisan@gmail.com',
                'username' => 'admin',
                'level' => 1,
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Kasir',
                'email' => 'kasir@gmail.com',
                'username' => 'kasir',
                'level' => 1,
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Pimpinan',
                'email' => 'pimpinan@gmail.com',
                'username' => 'pimpinan',
                'level' => 1,
                'password' => bcrypt('123456')
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
