<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Categories;

class ProductController extends Controller
{
    public function index(){
        $data['menu'] = 'products';
        $data['brands'] = Brands::all();
        $data['categories'] = Categories::all();
        
        return view('products.products.index')->with($data);
    }
}
