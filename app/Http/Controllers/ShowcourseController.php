<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class ShowcourseController extends Controller
{
    public function showcourse($id) {

        $course = Course::find($id);
        $students = $course->students;
        return view('student.course_student', compact('course', 'students'));
        
    }
}
