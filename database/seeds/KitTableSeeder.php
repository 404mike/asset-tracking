<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Kit;

class KitTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('kit')->delete();

        Kit::create(array(
            'name' => 'Minikit 1',
            'comments' => 'mini kit 1',
            'location' => '',
            'status' => 'available',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        Kit::create(array(
            'name' => 'Minikit 2',
            'comments' => 'mini kit 2',
            'location' => '',
            'status' => 'on loan',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        Kit::create(array(
            'name' => 'Minikit 3',
            'comments' => 'mini kit 3',
            'location' => '',
            'status' => 'on loan',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        Kit::create(array(
            'name' => 'Minikit 4',
            'comments' => 'mini kit 4',
            'location' => '',
            'status' => 'on loan',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));



    }
}