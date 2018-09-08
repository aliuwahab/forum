<?php
/**
 * Created by PhpStorm.
 * User: aliuwahab
 * Date: 08/09/2018
 * Time: 9:11 PM
 */
use Faker\Generator as Faker;


$factory->define(App\Thread::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
