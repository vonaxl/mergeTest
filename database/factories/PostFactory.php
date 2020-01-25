<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    $mypict = array("/img/img1.jpg", "/img/img2.jpg","/img/img3.jpg", "/img/img4.jpg","/img/img5.jpg");
    return [
        "title" => $faker-> unique() -> word,
        "body" => $faker-> paragraph,
        "pict" => $mypict[array_rand($mypict)],
        "date_creation_post" => $faker -> date($format = 'Y-m-d', $max = 'now')
    ];
});
