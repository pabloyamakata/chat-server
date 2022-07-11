<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::simplePaginate(5);
        return view('courses.index', ['courses' => $courses]);
    }

    public function create() {
        return view('courses.create');
    }

    public function show($id) {
        $course = Course::find($id);
        // Use compact() when there are many variables besides $course
        return view('courses.show', ['course' => $course]);
    }
}
