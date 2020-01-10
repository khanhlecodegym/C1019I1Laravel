@extends('layouts.master')

@section('content')
    <h1>Hello World!! {{ $name1 }}</h1>
    <h2>Tao {{$age}} tuổi</h2>
    @if ($age > 20)
        <p>{{ $name1 }} đủ tuổi đi học</p>
        <p>Ăn nhậu vô tư</p>
    @else
        <p>{{ $name1 }} chưa đủ tuổi</p>
        <p>O nha choi</p>
    @endif
    @for ($i = 0; $i < 5; $i++)
        <p>{{ $i + 1 }}</p>
    @endfor

    @foreach ($students as $key => $stu)
        <p>{{ $key }} => {{$stu }}</p>
    @endforeach

<form action="{{ route('admin.index', ['id' => 5]) }}">
    @method('PUT')
    @csrf
        <input type="text" name="name" id="">
        <input type="text" name="age" id="">
        <input type="submit" value="Submit">
    </form>
@endsection

