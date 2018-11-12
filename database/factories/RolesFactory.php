<?php

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name'  => $faker->name
    ];
});

$factory->defineAs(Role::class, 'admin', function (Faker $faker) {
    return [
        'name' => 'Админ',
        'slug'  => 'admin'
    ];
});

$factory->defineAs(Role::class, 'client', function (Faker $faker) {
    return [
        'name' => 'Пользователь',
        'slug'  => 'client'
    ];
});