<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Products;
use App\Models\Orders;
use App\Models\OrderDetails;
use App\Models\User;
use Auth;

class OrderController extends Controller
{
    public function index(){
        $data['menu'] = 'orders';
        $data['customers'] = Customers::select(['id', 'name', 'contact_person', 'contact_person_mobile'])->get();
        $data['products'] = Products::all();
        $data['salesmen'] = User::select(['id', 'name',])
                                    ->where('type', '2')
                                    ->where('created_by', Auth::id())
                                    ->get();
        
        //dd($data);
        return view('order.index')->with($data);
    }

    public function orders_filter(Request $request){
        $req = $request->all();
        $data = Orders::when(!empty($req['salesman']), function ($q) use ($req) {
                    return $q->where('created_by', $req['salesman']);
                })->when(!empty($req['from_date']), function ($q) use ($req) {
                    return $q->where('created_at','>=', date('Y-m-d H:i:s', strtotime($req['from_date'].' 00:00:01')));
                })->when(!empty($req['to_date']), function ($q) use ($req) {
                    return $q->where('created_at','<=', date('Y-m-d H:i:s', strtotime($req['to_date'].' 23:59:59')));
                })->get();

        return view('order.load', ['data' => $data]);
    }

    public function load(){
        $data = Orders::all();
        //dd($data);
        return view('order.load', ['data' => $data]);
    }


    public function view($id){
        $data = Orders::find($id);

        return view('order.details', ['data' => $data]);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];
        if (empty($data['customer']) || count($data['product']) == 0) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $id = Orders::create($data);

            $response['success'] = 'success';
            $response['message'] = 'Order Successfully Created. Order#: '.$id;

        }

        echo json_encode($response);
    }

    public function edit($id){
        $data['customers'] = Customers::select(['id', 'name', 'contact_person', 'contact_person_mobile'])->get();
        $data['products'] = Products::all();
        $data['order'] = Orders::find($id);
        
        //dd($data);
        return view('order.edit')->with($data);
    }

    public function order_update(Request $request){
        $data = $request->all();
        $response = [];
        if (empty($data['customer']) || count($data['product']) == 0) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            Orders::order_update($data);

            $response['success'] = 'success';
            $response['message'] = 'Order Successfully Updated.';

        }

        echo json_encode($response);
    }


}
