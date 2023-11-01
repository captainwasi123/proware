<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('login');
    }

    public function authenticate(Request $request){
        $data = $request->all();
        $errors = '';
        $data = [];

        if (empty($data['email']) || empty($data['password'])) {
            $errors = 'Please Fill all required fields.';
        }

        if (!empty($errors)) {
            $data['success'] = false;
            $data['errors'] = $errors;
        } else {
            $data['success'] = true;
            $data['message'] = 'Success!';
        }

        echo json_encode($data);
    }
}
