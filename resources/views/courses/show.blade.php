@extends('layouts.template')

@section('title', $course->name . ' Course')

@section('content')
    <h1>This page will show a specific course like {{ $course->name }}!</h1>
    <a href={{ route('courses.index'); }}>Go to courses</a>
    <br>
    <a href={{ route('courses.edit', $course); }}>Edit Course</a>
    <p><strong>Category: </strong>{{ $course->category }}</p>
    <p>{{ $course->description }}</p>
    <form action="{{ route('courses.destroy', $course); }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete Course</button>
    </form>
@endsection
