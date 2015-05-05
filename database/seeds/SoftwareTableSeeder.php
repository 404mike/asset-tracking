<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\SoftwareItems;

class SoftwareTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('software_items')->delete();

        SoftwareItems::create(array(
            'name' => 'Photoshop Elements 11',
            'manufacturer' => 'Adobe',
            'version' => '11',
            'inventory_number' => '00021',
            'serial_number' => '979-446-357',
            'date_of_purchase' => '',
            'supplier_contact' => '',
            'notes' => '',
            'installed_on' => '1',
            'licence' => '',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        SoftwareItems::create(array(
            'name' => 'Photoshop Elements 11',
            'manufacturer' => 'Adobe',
            'version' => '11',
            'inventory_number' => '00022',
            'serial_number' => '789-456-334',
            'date_of_purchase' => '',
            'supplier_contact' => '',
            'notes' => '',
            'installed_on' => '2',
            'licence' => '',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        SoftwareItems::create(array(
            'name' => 'Photoshop Elements 11',
            'manufacturer' => 'Adobe',
            'version' => '11',
            'inventory_number' => '00023',
            'serial_number' => '321-123-487',
            'date_of_purchase' => '',
            'supplier_contact' => '',
            'notes' => '',
            'installed_on' => '3',
            'licence' => '',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        SoftwareItems::create(array(
            'name' => 'Photoshop Elements 11',
            'manufacturer' => 'Adobe',
            'version' => '11',
            'inventory_number' => '00024',
            'serial_number' => '784-891-657',
            'date_of_purchase' => '',
            'supplier_contact' => '',
            'notes' => '',
            'installed_on' => '4',
            'licence' => '',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        SoftwareItems::create(array(
            'name' => 'Adobe Photoshop Lightroom',
            'manufacturer' => 'Adobe',
            'version' => '6',
            'inventory_number' => '00025',
            'serial_number' => '654-655-327',
            'date_of_purchase' => '',
            'supplier_contact' => '',
            'notes' => '',
            'installed_on' => '1',
            'licence' => '',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        SoftwareItems::create(array(
            'name' => 'Adobe Photoshop Lightroom',
            'manufacturer' => 'Adobe',
            'version' => '6',
            'inventory_number' => '00026',
            'serial_number' => '118-897-342',
            'date_of_purchase' => '',
            'supplier_contact' => '',
            'notes' => '',
            'installed_on' => '2',
            'licence' => '',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));        
    }
}