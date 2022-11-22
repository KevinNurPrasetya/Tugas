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
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('12345'),
            'role'=> 'admin'
        ]);

        User::create([
            'name'=> 'guru',
            'email'=> 'guru@gmail.com',
            'password'=> bcrypt('12345'),
            'role'=> 'walas'
        ]);

        User::create([
            'name'=> 'kevin',
            'email'=> 'kevin@gmail.com',
            'password'=> bcrypt('12345'),
            'role'=> 'siswa'
        ]);
    }
}
