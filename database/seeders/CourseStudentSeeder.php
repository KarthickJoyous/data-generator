<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\CourseStudent;
use Illuminate\Database\Seeder;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        foreach(range(1, 500) as $key) {
            CourseStudent::Create([
                'course_id' => Course::inRandomOrder()->first()->id,
                'student_id' => Student::inRandomOrder()->first()->id
            ]);
        }
    }
}
