<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->streetAddress,
        'amount' => $faker->randomNumber(3),
        'vendor' => $faker->domainName,
        'brand' => $faker->city,
        'user_id' => DB::table('Users')->inRandomOrder()->first()->id,
    ];
});
