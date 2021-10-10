<?php

use Faker\Generator as Faker;

$factory->define(\App\CategoryModel::class,Function (Faker $faker)
{
    return [
        'name' => $faker->words(3,true)
    ];
});