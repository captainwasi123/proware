<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiries;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Auth;

class MainController extends Controller
{
    public function index(){
        $data['menu'] = 'dashboard';
        $data['today_inquiries'] = Inquiries::whereDay('created_at', now()->day)->count();
        $data['today_orders'] = Orders::whereDay('created_at', now()->day)->count();
        $data['total_inquiries'] = Inquiries::count();
        $data['total_orders'] = Orders::count();

        $data['top_products'] = Products::withCount('Orders')->orderBy('orders_count', 'desc')->limit(4)->get();

        $data['salesmen'] = User::select(['id','name'])->withCount('todays_orders')->withCount('todays_inquiries')->where('created_by', Auth::id())->get();
        //dd($data);
        return view('dashboard')->with($data);
    }
}
