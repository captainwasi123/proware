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
                if(!empty($data['cat_id'])){
                    $id = base64_decode($data['cat_id']);
                    $cat = Categories::find($id);
                    $cat->name = $data['name'];
                    $cat->save();

                    $response['success'] = true;
                    $response['message'] = 'Success! Category Updated.'; 
                }else{
                    Categories::create($data);

                    $response['success'] = true;
                    $response['message'] = 'Success! New Category Created.';
                }
            }else{
                $response['success'] = false;
                $response['errors'] = 'Alert! This category ('.$data["name"].') is already availble.';
            }
        }

        echo json_encode($response);
    }

    public function edit($id){
        $id = base64_decode($id);

        $data = Categories::find($id);

        $response['id'] = base64_encode($data->id);
        $response['name'] = $data->name;

        return json_encode($response);
    }

    public function delete($id){
        $id = base64_decode($id);

        Categories::destroy($id);

        $response = 'success';

        return $response;
    }
}
