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

    public function edit($id){
        $id = base64_decode($id);
        $data['brands'] = Brands::all();
        $data['categories'] = Categories::all();
        $data['data'] = Products::find($id);

        return view('products.products.edit')->with($data);
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

    public function product_update(Request $request){
        $data = $request->all();
        $response = [];
        $id = base64_decode($data['product_id']);

        if (empty($data['name']) || empty($data['category_id']) || empty($data['brand_id']) || empty($data['price'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            Products::product_update($id, $data);

            if($request->hasFile('edit_product_image')){
                $file = $request->file('edit_product_image');
                $ext = $file->getClientOriginalExtension();
                $newname = $id.date('dmyhis').'.'.$ext;

                $file->move(public_path().'/storage/products',$newname);

                $p = Products::find($id);
                $p->image = $newname;
                $p->save();

            }

            $response['success'] = 'success';
            $response['message'] = 'Success! Product Successfully Updated.';
        }

        echo json_encode($response);
    }

    public function delete($id){
        $id = base64_decode($id);

        Products::destroy($id);

        $response = 'success';

        return $response;
    }

    public function product_filter(Request $request){
        $req = $request->all();
        $data = Products::when(!empty($req['name']), function ($q) use ($req) {
                    return $q->where('name','like',  '%'.$req['name'].'%');
                })->when(!empty($req['brand_id']), function ($q) use ($req) {
                    return $q->where('brand_id','=', $req['brand_id']);
                })->when(!empty($req['category_id']), function ($q) use ($req) {
                    return $q->where('category_id','=', $req['category_id']);
                })->when(!empty($req['status']), function ($q) use ($req) {
                    return $q->where('status','=', $req['status']);
                })->get();

        return view('products.products.load', ['data' => $data]);
    }
}
