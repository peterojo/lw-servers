<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Server::class, function (Faker\Generator $faker) {
	return [
		'location_id' => function () {
			return factory(App\Models\Location::class)->create()->id;
		},
		'model_name'        => $faker->userAgent,
		'ram_size'          => $faker->randomElement(['8gb', '16gb', '32gb', '64gb']),
		'ram_type'          => $faker->randomElement(['DDR3', 'DDR4']),
		'strg_quantity'     => $faker->numberBetween(1, 8),
		'strg_capacity_gb'  => $faker->randomNumber(),
		'strg_type'         => $faker->randomElement(['SAS','SATA2','SSD']),
		'price'             => $faker->randomFloat(2),
		'currency'          => $faker->currencyCode
	];
});

$factory->define(App\Models\Location::class, function (Faker\Generator $faker) {
	return [
		'abbr' => $faker->citySuffix,
		'name'  => $faker->city
	];
});