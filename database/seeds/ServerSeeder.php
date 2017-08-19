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
        Server::insert([
	        [
	        	'model_name'        => 'Dell R210Intel Xeon X3440',
		        'ram_size'          => '16gb',
		        'ram_type'          => 'DDR3',
		        'strg_quantity'  => 2,
		        'strg_capacity_gb'  => 2000,
		        'strg_type'      => 'SATA2',
		        'location_id'       => 1,
		        'price'             => 49.99,
		        'currency'          => 'EUR'
	        ],
            [
                'model_name'        => 'HP DL180G62x Intel Xeon E5620',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 119.00,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380eG82x Intel Xeon E5-2420',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 131.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'RH2288v32x Intel Xeon E5-2650V4',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 227.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'RH2288v32x Intel Xeon E5-2620v4',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 161.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R210-IIIntel Xeon E3-1230v2',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 72.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380pG82x Intel Xeon E5-2650',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 179.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'IBM X36302x Intel Xeon E5620',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 106.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL120G7Intel G850',
                'ram_size'          => '4gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 39.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2667v4',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 364.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2670v3',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 364.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2650v3',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 279.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2650v4',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 286.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2630v4',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 239.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL180 G92x Intel Xeon E5-2620v3',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 199.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R210-IIIntel G530',
                'ram_size'          => '4gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 500,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 35.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R210-IIIntel Xeon E3-1220',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 59.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R9304x Intel Xeon E7-4850v3',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 1044.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R9304x Intel Xeon E7-4820v3',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 756.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R9304x Intel Xeon E7-4830v3',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 874.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R210-IIIntel Xeon E3-1270v2',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 89.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Supermicro SC846Intel Xeon E5620',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 24,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 199.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL120G91x Intel E5-1650v3',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 154.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL120G7Intel Xeon E3-1230',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 84.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'DL20G9Intel Xeon E3-1270v5',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 112.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL120G91x Intel E5-1620v3',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 119.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380pG82x Intel Xeon E5-2620',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 154.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380eG82x Intel Xeon E5-2420',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 142.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2620v3',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 209.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'RH2288v32x Intel Xeon E5-2650V4',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 227.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'RH2288v32x Intel Xeon E5-2620v4',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 161.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2620v4',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 204.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R210-IIIntel Xeon E3-1230v2',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 72.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R7202x Intel Xeon E5-2643',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 221.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL180G62x Intel Xeon E5645',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 129.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R6202x Intel Xeon E5-2650',
                'ram_size'          => '96gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 191.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL120G7Intel Xeon E3-1230',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 195.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380pG82x Intel Xeon E5-2620',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 295.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380pG82x Intel Xeon E5-2650',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 355.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL120G7Intel G850',
                'ram_size'          => '4gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 163.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R210-IIIntel Xeon E3-1230v2',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 500,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 119.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380pG82x Intel Xeon E5-2650',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 272.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2650v3',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 367.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL380pG82x Intel Xeon E5-2620',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 212.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2620v3',
                'ram_size'          => '64gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 277.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2670v3',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 389.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL180G62x Intel Xeon E5645',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 8,
                'strg_capacity_gb'  => 2000,
                'strg_type'      => 'SATA2',
                'location_id'       => 1,
                'price'             => 180.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R7202x Intel Xeon E5-2643',
                'ram_size'          => '32gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 120,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 246.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2630v4',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 1,
                'price'             => 341.99,
                'currency'          => 'EUR'
            ],
            [
                'model_name'        => 'HP DL120G7Intel Xeon E3-1240',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 7,
                'price'             => 105.99,
                'currency'          => 'USD'
            ],
            [
                'model_name'        => 'Dell R210Intel Xeon X3430',
                'ram_size'          => '8gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 500,
                'strg_type'      => 'SATA2',
                'location_id'       => 7,
                'price'             => 59.99,
                'currency'          => 'USD'
            ],
            [
                'model_name'        => 'Dell R210-IIIntel Xeon E3-1270v2',
                'ram_size'          => '16gb',
                'ram_type'          => 'DDR3',
                'strg_quantity'  => 2,
                'strg_capacity_gb'  => 1000,
                'strg_type'      => 'SATA2',
                'location_id'       => 5,
                'price'             => 121.99,
                'currency'          => 'USD'
            ],
            [
                'model_name'        => 'Dell R730XD2x Intel Xeon E5-2650V4',
                'ram_size'          => '128gb',
                'ram_type'          => 'DDR4',
                'strg_quantity'  => 4,
                'strg_capacity_gb'  => 480,
                'strg_type'      => 'SSD',
                'location_id'       => 6,
                'price'             => 565.99,
                'currency'          => 'SGD'
            ]
        ]);
    }
}
