@extends('layouts.template')

@section('title', $course->name . ' Course')

@section('content')
    <h1>This page will show a specific course like {{ $course->name }}!</h1>
    <a href={{ route('courses.index'); }}>Go to courses</a>
    <p><strong>Category: </strong>{{ $course->category }}</p>
    <p>{{ $course->description }}</p>
@endsection
