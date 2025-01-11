<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function fetchCourses()
    {
        // Fetch all courses from the database
        $courses = Course::all();



        // Pass data to a view
        return view('home', compact('courses'));
    }
    public function fetchCoursesAd()
    {
        // Fetch all courses from the database
        $courses = Course::all();



        // Pass data to a view
        return view('admissions', compact('courses'));
    }
    public function showCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show_course', compact('course'));
    }
}
