<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\StoreCourse;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::orderby('id', 'desc')->simplePaginate(5);
        return view('courses.index', ['courses' => $courses]);
    }

    public function create() {
        return view('courses.create');
    }

    public function store(StoreCourse $request) {
        
        $course = Course::create($request->all());

        // Same as...

        // $course = Course::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]);

        // This last option is good but not the most efficient
        
        // $course = new Course();
        // $course->name = $request->name;
        // $course->description = $request->description;
        // $course->category = $request->category;
        // $course->save();
        
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

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course = Course::find($id);
        $course->update($request->all());
        
        // $course->name = $request->name;
        // $course->description = $request->description;
        // $course->category = $request->category;
        // $course->save();
        
        return redirect()->route('courses.show', $course->id);
    }
}
