<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newStudent = new Student();
            $newStudent->first_name = $faker->firstName();
            $newStudent->last_name = $faker->lastName();
            $newStudent->age = rand(6, 30);
            $newStudent->save();
        }
    }
}
