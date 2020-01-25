<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        "body"=> $faker -> paragraph,
        "date_creation_comment" => $faker -> date($format = 'Y-m-d', $min = 'now')
    ];
});
