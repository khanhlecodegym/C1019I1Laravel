<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    $name = 'Hoang';
    $age = 23;
    $students = ['Hoàng', 'Tân', 'Nguyên'];
    return view('welcome', ['name1' => $name, 'age' => $age, 'students' => $students]);
})->name('home');

Route::post('/{id}', function (Request $request, $id) {
    $name = $request->input('name');
    $age = $request->input('age');
    return $id;
    // return view('welcome3', ['name' => $name, 'age' => $age]);
    return redirect()->route('user.index', ['age' => $age]);
})->name('admin.index');


Route::get('/hello/{age}', function ($age) {
    $name = 'Hoang';
    return view('welcome1', ['name' => $name, 'age'=> $age]);
})->name('user.index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('users', 'StudentController@index')->name('students.index');

    Route::get('create', 'StudentController@create')->name('students.create');
    Route::post('create', 'StudentController@store')->name('students.store');

});

Route::group(['prefix' => 'product'], function () {
    Route::get('/{amount}', 'ProductController@index')->middleware('amount')->name('products.index');

    // Route::get('create', 'StudentController@create')->name('students.create');
    // Route::post('create', 'StudentController@store')->name('students.store');

});

Route::group(['prefix' => 'customer'], function () {
    Route::get('/', 'CustomerController@index')->name('customers.index');

    Route::get('create', 'CustomerController@create')->name('customers.create');
    Route::post('create', 'CustomerController@store')->name('customers.store');

});

