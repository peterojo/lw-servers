<?php

use App\Models\Server;
use Illuminate\Database\Seeder;



class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	require_once __DIR__."/../servers_seed.php";
    	
    	Server::insert($c);
    }
}
