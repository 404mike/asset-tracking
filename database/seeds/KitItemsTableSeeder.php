<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\KitItems;

class KitItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('kit_items')->delete();

        KitItems::create(array(
            'belongs_to_kit' => 1,
            'physical_item' => 1, // laptop
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitItems::create(array(
            'belongs_to_kit' => 1,
            'physical_item' => 9, // pelicase
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitItems::create(array(
            'belongs_to_kit' => 2,
            'physical_item' => 2, // laptop
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitItems::create(array(
            'belongs_to_kit' => 2,
            'physical_item' => 10, // pelicase
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitItems::create(array(
            'belongs_to_kit' => 3,
            'physical_item' => 3, // laptop
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitItems::create(array(
            'belongs_to_kit' => 3,
            'physical_item' => 11, // pelicase
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitItems::create(array(
            'belongs_to_kit' => 4,
            'physical_item' => 4, // laptop
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitItems::create(array(
            'belongs_to_kit' => 4,
            'physical_item' => 12,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}