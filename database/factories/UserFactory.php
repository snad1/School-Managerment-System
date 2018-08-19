<?php

use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'other_name'=>$faker->firstName,
        'password' => bcrypt('password'), // secret
        'remember_token' => str_random(10),
        'role'=>$faker->randomElement([User::PARENT,User::TEACHER]),
    ];
});

$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'other_name' => $faker->name, // secret
        'dob' => $faker->dateTimeBetween('-40','40'),
        'parent_id'=>\App\StudentParent::all()->random()->id,
        'phone'=>$faker->phoneNumber,
        'class_id'=>\App\StudentClass::all()->random()->id,
        'image_path'=>$faker->imageUrl(200,200),
        'address'=>$faker->address,
        'hometown'=>$faker->city,
        'gender'=>$faker->randomElement(['male','female']),
        'city'=>$faker->city,
        'region'=>$faker->city,
        'country'=>$faker->country,
    ];
});


$factory->define(App\StudentParent::class, function (Faker $faker) {

    $user=User::all()->where('role','==','parent')->random();

    return [
        'first_name' => $user->first_name,
        'last_name'=>$user->last_name,
        'other_name' => $user->other_name,
        'dob' => $faker->dateTimeBetween('-30','now'), // secret
        'email'=>$user->email,
        'phone'=>$faker->phoneNumber,
        'occupation'=>$faker->jobTitle,
        'relationship'=>$faker->randomElement(['parent','guardian']),
        'address'=>$faker->address,
        'hometown'=>$faker->city,
        'gender'=>$faker->randomElement(['male','female']),
        'city'=>$faker->city,
        'region'=>$faker->city,
        'country'=>$faker->country
    ];
});

$factory->define(App\Teacher::class, function (Faker $faker) {

    $user=User::all()->where('role','==','teacher')->random();

    return [
        'first_name' => $user->first_name,
        'last_name'=>$user->last_name,
        'other_name' => $user->other_name,
        'dob' => $faker->dateTimeBetween('-30','now'), // secret
        'email'=>$user->email,
        'status'=>$faker->randomElement(['senior staff','junior staff']),
        'postion'=>$faker->jobTitle,
        'relationship'=>$faker->randomElement(['parent','guardian']),
        'address'=>$faker->address,
        'hometown'=>$faker->city,
        'gender'=>$faker->randomElement(['male','female']),
        'city'=>$faker->city,
        'region'=>$faker->city,
        'country'=>$faker->country,
        'martial_status'=>$faker->randomElement(['single','married']),
        'image_path'=>$faker->imageUrl(640,480),
        'subject_id'=>\App\Subject::all()->random()->id,
        'level'=> $faker->randomElement(['daycare','primary','junior high']),
    ];
});

$factory->define(App\StudentClass::class, function (Faker $faker) {

    return [
        'class_name' => $faker->name,
        'level' => $faker->randomElement(['daycare','primary','junior high']),
        'n_o_s' => $faker->numberBetween(50,100), // secret
        'teacher_id' =>\App\Teacher::all()->all()->random()->id,
    ];
});



$factory->define(App\Subject::class, function (Faker $faker) {
    return [
        'subject_name' => $faker->name,
    ];
});


$factory->define(App\Subject_Marks::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
