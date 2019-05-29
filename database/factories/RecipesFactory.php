<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Recipe;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    $parse = parse_url($faker->url);

    $recipe_name = $faker->sentence;
    $slug = str_slug($recipe_name, '-');

    return [
        'recipe_name' => $recipe_name,
        'category_id' => function(){
           return Category::all()->random();
        },
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'publisher' => $faker->sentence,
        'publisher_url' =>$faker->url,
        'source_url' => $parse['host'],
        'recipe_slug' => $slug
    ];
});
