<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return 'Welcome to my courses!';
    }

    public function create() {
        return 'On this page you can create new courses!';
    }

    public function show($course) {
        return "This page will show a specific course like $course!";
    }
}
