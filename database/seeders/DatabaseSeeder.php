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


        Teacher::create(['name'=>'teacher','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher1','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher1@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher2','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher2@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher3','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher3@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher4','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher4@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher5','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher5@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher6','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher6@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher7','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher7@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher8','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher8@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher9','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher9@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher10','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher10@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
        Teacher::create(['name'=>'teacher11','image'=>asset('Images').'/'.rand(1,3).'.jpg','email'=>'teacher11@gmail.com','phone'=>'1234567899','description'=>fake()->sentence(20),'password'=>bcrypt('123456')]);
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
