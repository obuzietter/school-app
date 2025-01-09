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
}
