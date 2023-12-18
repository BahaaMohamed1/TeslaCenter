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
