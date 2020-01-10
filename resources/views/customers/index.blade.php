@extends('layouts.master')

@section('title', 'Page Customers')

@section('content')
    <h1 class="text-center">Page Customers</h1>

        <div class="row">
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Add New Customer</a>
            <table class="table table-dark table-hover">
                <tr>
                    <td>STT</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Action</td>
                </tr>
                @foreach ($customers as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td><a href="#">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>

@endsection

