@extends('layouts.master')
@section('title', 'Page Create Student')
@section('content')
    <h1>Create Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
            <input type="text" name="name" id="">
            <input type="text" name="age" id="">
            <input type="submit" value="Submit">
        </form>
@endsection

