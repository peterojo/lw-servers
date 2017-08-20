<?php

use App\Models\Location;
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
        Location::insert([
        	[ 'abbr' => 'AMS', 'name' => 'AmsterdamAMS-01' ],
        	[ 'abbr' => 'DAL', 'name' => 'DallasDAL-10' ],
        	[ 'abbr' => 'FRA', 'name' => 'FrankfurtFRA-10' ],
        	[ 'abbr' => 'HKG', 'name' => 'Hong KongHKG-10' ],
        	[ 'abbr' => 'SFO', 'name' => 'San FranciscoSFO-12' ],
        	[ 'abbr' => 'SIN', 'name' => 'SingaporeSIN-11' ],
        	[ 'abbr' => 'WDC', 'name' => 'Washington D.C.WDC-01' ]
        ]);
    }
}
