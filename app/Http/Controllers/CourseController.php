<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return view('courses.index');
    }

    public function create() {
        return view('courses.create');
    }

    public function show($course) {
        // Use compact() when there are many variables besides $course
        return view('courses.show', ['course' => $course]);
    }
}
