<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('locations')->insert([
        	[ 'name' => 'AmsterdamAMS-01' ],
        	[ 'name' => 'DallasDAL-10' ],
        	[ 'name' => 'FrankfurtFRA-10' ],
        	[ 'name' => 'Hong KongHKG-10' ],
        	[ 'name' => 'San FranciscoSFO-12' ],
        	[ 'name' => 'SingaporeSIN-11' ],
        	[ 'name' => 'Washington D.C.WDC-01' ]
        ]);
    }
}
