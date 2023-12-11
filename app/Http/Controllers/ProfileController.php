<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function index(){
        $data['menu'] = 'profile';
        $data['user'] = User::find(Auth::id());

        return view('profile.index')->with($data);
    }


    public function profile_update(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['mobile']) || empty($data['email'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $email_check = User::where('email', $data['email'])->where('id', '!=', Auth::id())->first();
            if(empty($email_check->id)){
                $curr_user = User::find(Auth::id());
                
                $curr_user->email = $data['email'];
                $curr_user->mobile = $data['mobile'];
                $curr_user->save();

                $response['success'] = 'success';
                $response['message'] = 'Success! User Profile Updated.';
            }else{

                $response['success'] = 'error';
                $response['errors'] = 'This Email is already taken.';
            }
        }

        echo json_encode($response);
    }

    public function change_password(Request $request){
        $data = $request->all();
        $response = [];

        if (empty($data['current_password']) || empty($data['new_password']) || empty($data['confirm_password'])) {
            $response['success'] = 'error';
            $response['errors'] = 'Please Fill all required fields.';
        }else{
            $user = User::find(Auth::id());
            if(Hash::check($data['current_password'], $user->password)){
                $curr_user = User::find(Auth::id());
                
                if($data['new_password'] == $data['confirm_password']){
                    $curr_user->password = bcrypt($data['new_password']);
                    $curr_user->save();

                    $response['success'] = 'success';
                    $response['message'] = 'Success! User Profile Updated.';
                }else{

                    $response['success'] = 'error';
                    $response['errors'] = 'Confirm password does not match.';
                }
            }else{

                $response['success'] = 'error';
                $response['errors'] = 'Current password is incorrect.';
            }
        }

        echo json_encode($response);
    }
}
