<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public $postController;

    public function __construct(PostController $postController) {
        $this->postController = $postController;
    }

    function index() {
        $listProduct = [
                1 => [
                    'name' => 'thuoc la',
                    'des' => 'Hut thuoc bo phoi'
                ],
                2 => [
                    'name' => 'mi tom',
                    'des' => 'Thuc an quoc dan'
                ]
        ];


        if ($this->postController->title === 'BCS1') {
            return redirect()->route('home');
        }
        $customers = DB::select('select id, name, email from customers');
        dd($customers);

        return view('products.index', ['listProduct' => $listProduct]);
    }
}
