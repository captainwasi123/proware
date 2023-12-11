<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class InquiriesController extends Controller
{
    public function index(){
        $data['menu'] = 'inquiries';
        $data['customers'] = Customers::select(['id', 'name', 'contact_person', 'contact_person_mobile'])->get();
        
        //dd($data);
        return view('inquiries.index')->with($data);
    }
}
