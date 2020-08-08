<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autor;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {

    $randomNumber = rand(1, 100);
    $cover = "https://picsum.photos/id/{$randomNumber}/200/300" ;
    return [
        'autor_id' => Autor::inRandomOrder()->first()->id,
        'title' => $faker->sentence(4),
        'desc' => $faker->sentence(10),
        'cover' => $cover ,
        'qty' => rand(10, 20),

    ];
});
