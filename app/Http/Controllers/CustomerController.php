<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index() {
        $customers = DB::select('select * from customers');
        // dd($customers);
        return view('customers.index')->with('customers',$customers);
    }

    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        // dd($request->all());

        DB::insert('insert into customers (name, email, dob) values (?, ?, ?)', [$request->name, $request->email, $request->dob]);
        return redirect()->route('customers.index');
    }
}
