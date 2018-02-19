<?php

use Faker\Generator as Faker;

$factory->define(\Adi\Post::class, function (Faker $faker)
{
    return [
        'user_id' => function ()
        {
            return factory(\Adi\User::class)->create()->id;
        },
        'title'   => $faker->sentence(),
        'body'    => $faker->paragraph()
    ];
});
