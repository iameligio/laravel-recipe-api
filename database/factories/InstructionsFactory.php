<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Instruction;
use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Instruction::class, function (Faker $faker) {
    return [
        'instruction' => $faker->sentence,
        'recipe_id' => function() {
            return Recipe::all()->random();
        }
    ];
});
