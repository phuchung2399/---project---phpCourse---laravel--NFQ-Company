<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title'         => $faker->name,
        'description'   => $faker->text(),
        'link'          => $faker->url,
        'category'      => $faker->creditCardType,
        'comments'      => $faker->slug,
    ];
});
