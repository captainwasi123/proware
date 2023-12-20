<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Products;
use App\Models\Inquiries;
use App\Models\InquiryDetails;

class InquiriesController extends Controller
{
    public function index(){
        $data['menu'] = 'inquiries';
        $data['customers'] = Customers::select(['id', 'name', 'contact_person', 'contact_person_mobile'])->get();
        $data['products'] = Products::all();
        
        //dd($data);
        return view('inquiries.index')->with($data);
    }

    public function load(){
        $data = Inquiries::all();

        return view('inquiries.load', ['data' => $data]);
    }


    public function view($id){
        $data = Inquiries::find($id);

        return view('inquiries.details', ['data' => $data]);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];
        if (empty($data['customer']) || count($data['product']) == 0) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $id = Inquiries::create($data);

            $response['success'] = 'success';
            $response['message'] = 'Inquiries Successfully Created. Inq#: '.$id;

        }

        echo json_encode($response);
    }

    public function edit($id){
        $data['customers'] = Customers::select(['id', 'name', 'contact_person', 'contact_person_mobile'])->get();
        $data['products'] = Products::all();
        $data['inquiry'] = Inquiries::find($id);
        
        //dd($data);
        return view('inquiries.edit')->with($data);
    }





    function get_customer($id){
        $customer = Customers::find($id);
        if(!empty($customer->id)){
            
            $data = array(
                'email' => $customer->email,
                'phone' => $customer->landline,
                'address' => $customer->shop_no.', '.$customer->building_floor.', '.$customer->zone->name.', '.$customer->state->name.', '.$customer->country->name
            );

            $response['success'] = 'success';
            $response['data'] = $data;
        }else{

            $response['success'] = 'error';
            $response['errors'] = 'Customer is not listed.';
        }
        echo json_encode($response);
    }

    function get_product($id){
        $product = Products::find($id);
        if(!empty($product->id)){
            
            $data = array(
                'brand' => $product->brand->name,
                'category' => $product->category->name,
                'price' => number_format($product->price, 2)
            );

            $response['success'] = 'success';
            $response['data'] = $data;
        }else{

            $response['success'] = 'error';
            $response['errors'] = 'Product is not listed.';
        }
        echo json_encode($response);
    }
}
