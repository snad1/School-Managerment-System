<?php

use App\StudentClass;
use App\Subject;
use App\Teacher;
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
        'email'=>$faker->unique()->safeEmail,
        'password' => bcrypt('password'), // secret
        'remember_token' => str_random(10),
        'role'=>$faker->randomElement([User::PARENT,User::TEACHER]),
    ];
});
$factory->define(App\Teacher::class, function (Faker $faker) {
    $user=User::all()->where('role','==','teacher')->random();
    $subject_id=Subject::all()->random()->id;
    return [
        'first_name' => $user->first_name,
        'last_name'=>$user->last_name,
        'other_name' => $user->other_name,
        'dob' => $faker->dateTimeBetween('30','now'),
        'doj' => $faker->dateTimeBetween('30','now'),// secret
        'email'=>$user->email,
        'status'=>$faker->randomElement(['senior staff','junior staff']),
        'address'=>$faker->address,
        'hometown'=>$faker->city,
        'gender'=>$faker->randomElement([0,1]),
        'city'=>$faker->city,
        'region'=>$faker->city,
        'country'=>$faker->country,
        'martial_status'=>$faker->randomElement(['single','married']),
        'image_path'=>$faker->randomElement(['avatar.png','avatar1.png','avatar2.png',
            'avatar3.png','avatar4.png','avatar5.png']),
        'subject_id'=>$faker->numberBetween(1,8),
        'level'=> $faker->randomElement(['daycare','primary','junior high']),
    ];
});

$factory->define(App\StudentClass::class, function (Faker $faker) {

    return [
        'class_name' => $faker->randomElement(['jhs1','jhs2','jhs3','p6','p5','p4','p3','p2','p1',
                    'kg2','kg1','nursery2','nursery1','creche']),
        'level' => $faker->randomElement(['daycare','lower primary','upper primary','junior high']),
        'n_o_s' => $faker->numberBetween(50,100), // secret
        'teacher_id' =>$faker->numberBetween(1,50),
    ];
});


$factory->define(App\StudentParent::class, function (Faker $faker) {
          $user=User::all()->where('role','==','parent')->random();
    return [
        'first_name' => $user->first_name,
        'last_name'=>$user->last_name,
        'other_name' => $user->other_name,
        'dob' => $faker->dateTimeBetween('30','now'), // secret
        'email'=>$user->email,
        'phone'=>$faker->randomNumber() ,
        'occupation'=>$faker->jobTitle,
        'relationship'=>$faker->randomElement(['parent','guardian']),
        'address'=>$faker->address,
        'hometown'=>$faker->city,
        'gender'=>$faker->randomElement([0,1]),
        'city'=>$faker->city,
        'region'=>$faker->city,
        'country'=>$faker->country
    ];
});


$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'other_name' => $faker->name, // secret
        'dob' => $faker->dateTimeBetween('40','now'),
        'doj' => $faker->dateTimeBetween('40','now'),
        'parent_id'=>$faker->numberBetween(1,50),
        'phone'=>$faker->randomNumber(),
        'class_id'=>$faker->numberBetween(1,15),
        'image_path'=>$faker->randomElement(['avatar.png','avatar1.png','avatar2.png',
            'avatar3.png','avatar4.png','avatar5.png']),
        'address'=>$faker->address,
        'hometown'=>$faker->city,
        'gender'=>$faker->randomElement([0,1]),
        'city'=>$faker->city,
        'region'=>$faker->city,
        'country'=>$faker->country,
    ];
});





