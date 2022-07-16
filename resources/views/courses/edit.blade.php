@extends('layouts.template')

@section('title', 'Edit Course')

@section('content')
    <h1>On this page you can edit a course!</h1>
    <form action={{ route('courses.update', $course); }} method="POST">
        
        @csrf {{-- Sends a token to prevent csrf --}}
        
        @method('PUT')
        
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}">
        </label>

        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br><br>
        
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{ old('description', $course->description) }}</textarea>
        </label>

        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br><br>
        
        <label>
            Category:
            <br>
            <input type="text" name="category" value="{{ old('category', $course->category) }}">
        </label>

        @error('category')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br><br>

        <button type="submit">Submit</button>
    </form>
@endsection
