<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Grade;
use App\Models\Specialization;
use App\Models\Teacher;
use function Illuminate\Database\Eloquent\Factories\forEachSequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        Teacher::create(['name'=>'teacher','email'=>'teacher@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher1','email'=>'teacher1@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher2','email'=>'teacher2@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher3','email'=>'teacher3@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher4','email'=>'teacher4@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher5','email'=>'teacher5@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher6','email'=>'teacher6@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher7','email'=>'teacher7@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher8','email'=>'teacher8@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher9','email'=>'teacher9@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher10','email'=>'teacher10@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher11','email'=>'teacher11@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'admin','email'=>'admin@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'role'=>'admin','password'=>bcrypt('123456')]);
        Specialization::create(['name'=>'علمى']);
        Specialization::create(['name'=>'أدبى']);

        $grades = ['الصف الأول الثانوى','الصف الثانى الثانوى','الصف الثالث الثانوى'];
        $paths = ['1th.jpg','2th.jpg','3th.jpg'];

        foreach ($grades as $key => $grade)
        {
            Grade::create(['name'=>$grade,'image_path'=>public_path('Images').'/'.$paths[$key]]);
        }


    }
}
