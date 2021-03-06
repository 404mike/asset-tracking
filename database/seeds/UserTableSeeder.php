<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Mike',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}