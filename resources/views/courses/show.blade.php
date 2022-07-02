@extends('layouts.template')

@section('title', $course . ' Course')

@section('content')
    <h1>This page will show a specific course like {{ $course }}!</h1>
@endsection
