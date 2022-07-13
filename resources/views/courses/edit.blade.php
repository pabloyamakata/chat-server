@extends('layouts.template')

@section('title', 'Edit Course')

@section('content')
    <h1>On this page you can edit a course!</h1>
    <form action={{ route('courses.update', $course->id); }} method="POST">
        @csrf {{-- Sends a token to prevent csrf --}}
        @method('PUT')
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{ $course->name }}">
        </label>
        <br><br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{ $course->description }}</textarea>
        </label>
        <br><br>
        <label>
            Category:
            <br>
            <input type="text" name="category" value="{{ $course->category }}">
        </label>
        <br><br>
        <button type="submit">Submit</button>
    </form>
@endsection
