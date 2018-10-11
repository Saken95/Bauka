<?php

use App\Roles;
use Faker\Generator as Faker;

$factory->define(Roles::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->defineAs(Roles::class, 'admin', function (Faker $faker) {
    return [
        'name' => 'Админ',
        'slug'  => 'admin'
    ];
});

$factory->defineAs(Roles::class, 'client', function (Faker $faker) {
    return [
        'name' => 'Пользователь',
        'slug'  => 'client'
    ];
});