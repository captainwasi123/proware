<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['menu'] = 'products';

        return view('products.products.index')->with($data);
    }
}
