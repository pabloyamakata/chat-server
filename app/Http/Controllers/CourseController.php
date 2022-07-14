<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::orderby('id', 'desc')->simplePaginate(5);
        return view('courses.index', ['courses' => $courses]);
    }

    public function create() {
        return view('courses.create');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;
        $course->save();
        return redirect()->route('courses.show', $course->id);
    }

    public function show($id) {
        $course = Course::find($id);
        // Use compact() when there are many variables besides $course
        return view('courses.show', ['course' => $course]);
    }

    public function edit($id) {
        $course = Course::find($id);
        return view('courses.edit', ['course' => $course]);
    }

    public function update(Request $request, $id) {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;
        $course->save();
        return redirect()->route('courses.show', $course->id);
    }
}
