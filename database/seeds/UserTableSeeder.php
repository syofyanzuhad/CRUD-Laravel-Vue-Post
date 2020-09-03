<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Syofyan Zuhad',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('password')
        ]);
    }
}
