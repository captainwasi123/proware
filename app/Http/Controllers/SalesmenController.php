<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\address\Zones;
use Auth;

class SalesmenController extends Controller
{
    public function index(){
        $data['menu'] = 'salesmen';
        $data['zones'] = Zones::all();

        return view('salesmen.index')->with($data);
    }

    public function load(){
        $response = [];
        $data = User::where('created_by', Auth::user()->id)->get();
        
        return view('salesmen.load', ['data' => $data]);
    }

    public function create(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['name']) || empty($data['eid']) || empty($data['dob']) || empty($data['gender']) || empty($data['mobile']) || empty($data['email']) || empty($data['password']) || empty($data['confirm_password'])  || empty($data['zone_id'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            if($data['password'] == $data['confirm_password']){
                $udata = array(
                        'name' => $data['name'], 
                        'eid' => $data['eid'], 
                        'mobile' => $data['mobile'], 
                        'dob' => date('Y-m-d', strtotime($data['dob'])), 
                        'email' => $data['email'], 
                        'gender' => $data['gender'], 
                        'type' => '2', 
                        'password' => bcrypt($data['password']), 
                        'is_active' => '1', 
                        'created_by' => Auth::id()
                    );

                User::create($udata);

                $response['success'] = 'success';
                $response['message'] = 'Success! New Salesmen Successfully Created.';
            }else{
                $response['success'] = 'error';
                $response['errors'] = 'Confirm Password does not match.';
            }
        }

        echo json_encode($response);
    }
}
