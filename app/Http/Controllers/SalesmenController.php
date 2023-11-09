<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserZones;
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
                $email_check = User::where('email', $data['email'])->first();
                if(empty($email_check->id)){
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

                    $user = User::create($udata);

                    foreach ($data['zone_id'] as $key => $value) {
                        UserZones::create(array('user_id' => $user->id, 'zone_id' => $value));
                    }

                    $response['success'] = 'success';
                    $response['message'] = 'Success! New Salesmen Successfully Created.';
                }else{

                    $response['success'] = 'error';
                    $response['errors'] = 'This Email is already taken.';
                }
            }else{
                $response['success'] = 'error';
                $response['errors'] = 'Confirm Password does not match.';
            }
        }

        echo json_encode($response);
    }

    public function statusChange($id, $status){
        $id = base64_decode($id);
        $response = [];

        $u = User::find($id);
        $u->is_active = $status;
        $u->save();

        echo 'Success! Salesman status updated.';
    }

    public function delete($id){
        $id = base64_decode($id);

        User::destroy($id);

        $response = 'success';

        return $response;
    }

    public function edit($id){
        $id = base64_decode($id);
        $data['data'] = User::find($id);
        $data['zones'] = Zones::all();

        return view('salesmen.edit')->with($data);
    }

    public function salesmen_update(Request $request){
        $data = $request->all();
        $id = base64_decode($data['salesman_id']);
        $response = [];

        if (empty($data['mobile']) || empty($data['email']) || empty($data['zone_id'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $email_check = User::where('email', $data['email'])->where('id', '!=', $id)->first();
            if(empty($email_check->id)){
                $us = User::find($id);
                if(!empty($data['password'])){
                    if($data['password'] == $data['confirm_password']){
                        $us->password = bcrypt($data['password']);
                    }else{

                        $response['success'] = 'error';
                        $response['errors'] = 'Confirm Password does not match.';

                        return json_encode($response);
                    }
                }

                $us->email = $data['email'];
                $us->mobile = $data['mobile'];
                $us->save();

                UserZones::where('user_id', $id)->delete();

                foreach ($data['zone_id'] as $key => $value) {
                    UserZones::create(array('user_id' => $us->id, 'zone_id' => $value));
                }

                $response['success'] = 'success';
                $response['message'] = 'Success! Salesmen Successfully Updated.';
            }else{

                $response['success'] = 'error';
                $response['errors'] = 'This Email is already taken.';
            }
            
        }

        echo json_encode($response);
    }

    public function salesmen_filter(Request $request){
        $req = $request->all();
        $data = User::when(!empty($req['name']), function ($q) use ($req) {
                        return $q->where('name','like',  '%'.$req['name'].'%');
                    })->when(!empty($req['email']), function ($q) use ($req) {
                        return $q->where('email','=', $req['email']);
                    })->when(!empty($req['phone']), function ($q) use ($req) {
                        return $q->where('mobile','=', $req['phone']);
                    })->when(!empty($req['zone_id']), function ($q) use ($req) {
                        return $q->whereHas('zones', function($qq) use($req) {
                                    return  $qq->where('zone_id','=', $req['zone_id']);
                                });
                    })->where('created_by', Auth::id())
                    ->get();

        return view('salesmen.load', ['data' => $data]);
    }
}
