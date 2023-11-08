<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address\Countries;
use App\Models\address\States;
use App\Models\address\Zones;
use App\Models\CustomerType;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index(){
        $data['menu'] = 'customers';
        $data['customer_type'] = CustomerType::all();
        $data['countries'] = Countries::all();
        $data['states'] = States::where('country_id', '1')->get();
        $data['zones'] = Zones::where('state_id', '1')->get();

        return view('customers.index')->with($data);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['category_id']) || empty($data['brand_id']) || empty($data['price'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $id = Customers::create($data);

            $response['success'] = 'success';
            $response['message'] = 'Success! New Customer Successfully Added.';
        }

        echo json_encode($response);
    }
}
