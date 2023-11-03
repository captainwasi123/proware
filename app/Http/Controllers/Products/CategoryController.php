<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index(){
        $data['menu'] = 'categories';
        $data['data'] = Categories::all();

        return view('products.categories.index')->with($data);
    }

    public function load(){
        $response = [];
        $data = Categories::all();
        
        return view('products.categories.load', ['data' => $data]);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['name'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $cat = Categories::where('name', $data['name'])->get();
            if(count($cat) == 0){
                Categories::create($data);

                $response['success'] = true;
                $response['message'] = 'Success!';
            }else{
                $response['success'] = false;
                $response['errors'] = 'Alert! This category ('.$data["name"].') is already availble.';
            }
        }

        echo json_encode($response);
    }

    public function delete($id){
        $id = base64_decode($id);

        Categories::destroy($id);

        $response = 'success';

        return $response;
    }
}
