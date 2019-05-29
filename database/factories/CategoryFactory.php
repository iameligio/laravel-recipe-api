<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    $category_name = $faker->word;

    return [
        'category_name' => $category_name,
        'category_slug' => $category_name
    ];
});
