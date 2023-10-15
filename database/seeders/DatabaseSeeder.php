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


        Teacher::create(['name'=>'teacher','email'=>'teacher@gmail.com','phone'=>'1234567899','password'=>bcrypt('123456')]);
        Specialization::create(['name'=>'علمى']);
        Specialization::create(['name'=>'أدبى']);
        Specialization::create(['name'=>'عام']);

        $specializations=[1,2,3];
        $grades = ['الصف الأول الثانوى','الصف الثانى الثانوى','الصف الثالث الثانوى','الصف الأول الإعدادى','الصف الثانى الإعدادى','الصف الثالث الإعدادى'];
        $paths = ['1th.jpg','2th.jpg','3th.jpg','1a.jpg','2a.jpg','3a.jpg'];

        foreach ($grades as $key => $grade)
        {
            if($key<3)
            {
                foreach ($specializations as $specialization)
                    Grade::create(['name'=>$grade,'specialization_id'=>$specialization,'image_path'=>public_path('Images').'/'.$paths[$key]]);
            }
            else
            {
                Grade::create(['name'=>$grade,'specialization_id'=>3,'image_path'=>public_path('Images').'/'.$paths[$key]]);
            }
        }


    }
}
