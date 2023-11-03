<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $data['menu'] = 'dashboard';

        return view('dashboard')->with($data);
    }
}
