<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'first_name' => 'Mike',
            'last_name' => 'Jones',
            'username' => 'michaeljones401@gmail.com',
            'email' => 'michaeljones401@gmail.com',
            'password' => 'password',
            'confirmation_code' => 'confirmed',
            'confirmed' => true,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        User::create(array(
            'first_name' => 'Dave',
            'last_name' => 'Wadge',
            'username' => 'wadgester@gmail.com',
            'email' => 'wadgester@gmail.com',
            'password' => 'password',
            'confirmation_code' => 'confirmed',
            'confirmed' => true,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}