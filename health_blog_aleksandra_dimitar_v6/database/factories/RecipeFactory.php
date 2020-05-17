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
$factory->define(App\Recipe::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'recipe_name' => $faker->name,
        'description' => str_random(20),
        'user_id' => factory(App\User::class)
    ];
});
