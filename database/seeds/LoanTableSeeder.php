<?php

use \Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\KitLoans;

class LoanTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loans')->delete();

        KitLoans::create(array(
            'kit_on_loan' => 2,
            'on_loan_to' => 'Mike Jones',
            'date_on_loan' => '2015-03-05 10:00:00',
            'date_to_return' => '2015-05-05 10:00:00',
            'notes' => '',
            'kit_loan_location' => 'Aberystwyth',
            'contact' => 'fake_email@gmail.com',
            'status' => 'on loan',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitLoans::create(array(
            'kit_on_loan' => 3,
            'on_loan_to' => 'John Doe',
            'date_on_loan' => '2015-04-05 10:00:00',
            'date_to_return' => '2015-05-15 10:00:00',
            'notes' => 'Lorem ipsum',
            'kit_loan_location' => 'Cardiff',
            'contact' => '01574984314',
            'status' => 'on loan',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        KitLoans::create(array(
            'kit_on_loan' => 4,
            'on_loan_to' => 'Jane Doe',
            'date_on_loan' => '2015-05-05 10:00:00',
            'date_to_return' => '2015-06-05 10:00:00',
            'notes' => 'Lorem ipsum',
            'kit_loan_location' => 'Newport',
            'contact' => 'another_email@foo.com',
            'status' => 'on loan',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}