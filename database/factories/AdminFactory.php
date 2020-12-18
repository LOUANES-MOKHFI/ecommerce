<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'Louanes Mokhfi',
        'email' => 'louanes.mokhfi@gmail.com',
        //'email_verified_at' => now(),
        'password' => bcrypt('Louanes@mokhfi3595'), // password
       // 'remember_token' => Str::random(10),
    ];
});
