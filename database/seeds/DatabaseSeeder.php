<?php

use App\Student;
use App\StudentClass;
use App\StudentParent;
use App\Teacher;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        //User::truncate();
        //Teacher::truncate();
        //StudentParent::truncate();
       // StudentClass::truncate();
        Student::truncate();

        //factory(User::class,100)->create();

        //factory(Teacher::class,50)->create();

        //factory(StudentParent::class,70)->create();

        //factory(StudentClass::class,17)->create();

        factory(Student::class,15)->create();

        //$this->call(UsersTableSeeder::class);
    }
}
