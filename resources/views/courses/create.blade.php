@extends('layouts.template')

@section('title', 'Create Course')

@section('content')
    <h1>On this page you can create new courses!</h1>
    <form action={{ route('courses.store'); }} method="POST">
        
        @csrf {{-- Sends a token to prevent csrf --}}
        
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
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
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
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
            <input type="text" name="category" value="{{ old('category') }}">
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
