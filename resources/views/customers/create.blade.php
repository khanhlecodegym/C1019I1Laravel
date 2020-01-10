@extends('layouts.master')

@section('title', 'Page Create Customers')

@section('content')
    <h1 class="text-center text-primary">Page Create Customers</h1>

        <div class="row">
        <form action="{{ route('customers.store') }}" method="post" class="form-inline">
                @csrf
                <div class="form-group">
                    <label for="inputName">Name Customer</label>
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Input Name">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email Customer</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Input Email">
                </div>
                <div class="form-group">
                    <label for="inputDob">Dob Customer</label>
                    <input type="date" name="dob" class="form-control" id="inputDob" placeholder="Input Dob">
                </div>

                <input type="submit" value="Add" class="btn btn-primary">
            </form>
        </div>

@endsection

