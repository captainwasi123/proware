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

    public function load(){
        $response = [];
        $data = Customers::all();
        
        return view('customers.load', ['data' => $data]);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['mobile']) || empty($data['customer_type']) || empty($data['contact_person']) || empty($data['contact_person_mobile']) || empty($data['shop_no']) || empty($data['building_floor']) || empty($data['country_id']) || empty($data['state_id']) || empty($data['zone_id']) || empty($data['status'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $id = Customers::create($data);

            $response['success'] = 'success';
            $response['message'] = 'Success! New Customer Successfully Added.';
        }

        echo json_encode($response);
    }

    public function edit($id){
        $id = base64_decode($id);
        $data['customer_type'] = CustomerType::all();
        $data['countries'] = Countries::all();
        $data['states'] = States::where('country_id', '1')->get();
        $data['zones'] = Zones::where('state_id', '1')->get();
        $data['data'] = Customers::find($id);

        return view('customers.edit')->with($data);
    }

    public function customer_update(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['mobile']) || empty($data['customer_type']) || empty($data['contact_person']) || empty($data['contact_person_mobile']) || empty($data['shop_no']) || empty($data['building_floor']) || empty($data['country_id']) || empty($data['state_id']) || empty($data['zone_id']) || empty($data['status'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $id = Customers::customer_update(base64_decode($data['customer_id']), $data);

            $response['success'] = 'success';
            $response['message'] = 'Success! Customer Successfully Updated.';
        }

        echo json_encode($response);
    }


    public function delete($id){
        $id = base64_decode($id);

        Customers::destroy($id);

        $response = 'success';

        return $response;
    }

    public function view($id){
        $id = base64_decode($id);
        $data['data'] = Customers::find($id);

        return view('customers.view')->with($data);
    }
}
