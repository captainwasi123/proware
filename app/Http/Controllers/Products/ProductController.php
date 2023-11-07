<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(){
        $data['menu'] = 'products';
        $data['brands'] = Brands::all();
        $data['categories'] = Categories::all();

        return view('products.products.index')->with($data);
    }

    public function load(){
        $response = [];
        $data = Products::all();
        
        return view('products.products.load', ['data' => $data]);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['category_id']) || empty($data['brand_id']) || empty($data['price'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $id = Products::create($data);

            if($request->hasFile('product_image')){
                $file = $request->file('product_image');
                $ext = $file->getClientOriginalExtension();
                $newname = $id.date('dmyhis').'.'.$ext;

                $file->move(public_path().'/storage/products',$newname);

                $p = Products::find($id);
                $p->image = $newname;
                $p->save();

            }

            $response['success'] = 'success';
            $response['message'] = 'Success! New Product Successfully Uploaded.';
        }

        echo json_encode($response);
    }
}
