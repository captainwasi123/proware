<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;

class BrandController extends Controller
{
    public function index(){
        $data['menu'] = 'brands';

        return view('products.brands.index')->with($data);
    }

    public function load(){
        $response = [];
        $data = Brands::all();
        
        return view('products.brands.load', ['data' => $data]);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['name'])) {
            $response['success'] = false;
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $cat = Brands::where('name', $data['name'])->get();
            if(count($cat) == 0){
                if(!empty($data['b_id'])){
                    $id = base64_decode($data['b_id']);
                    $cat = Brands::find($id);
                    $cat->name = $data['name'];
                    $cat->save();

                    $response['success'] = true;
                    $response['message'] = 'Success! Brand Updated.'; 
                }else{
                    Brands::create($data);

                    $response['success'] = true;
                    $response['message'] = 'Success! New Brand Added.';
                }
            }else{
                $response['success'] = false;
                $response['errors'] = 'Alert! This Brand ('.$data["name"].') is already availble.';
            }
        }

        echo json_encode($response);
    }

    public function edit($id){
        $id = base64_decode($id);

        $data = Brands::find($id);

        $response['id'] = base64_encode($data->id);
        $response['name'] = $data->name;

        return json_encode($response);
    }

    public function delete($id){
        $id = base64_decode($id);

        Brands::destroy($id);

        $response = 'success';

        return $response;
    }
}
