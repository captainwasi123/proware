<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function index(){
        $data['menu'] = 'profile';
        $data['user'] = User::find(Auth::id());

        return view('profile.index')->with($data);
    }
}
