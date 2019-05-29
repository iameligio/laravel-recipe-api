<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ingredient;
use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
        'ingredient' => $faker->sentence,
        'recipe_id' => function() {
            return Recipe::all()->random();
        }
    ];
});
