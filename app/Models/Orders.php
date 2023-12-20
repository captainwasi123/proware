<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetails;
use App\Models\Customers;
use App\Models\User;
use Auth;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public static function create($data){
        $subtotal = 0;
        $discount = 0;
        $vat = 0;
        $vat_per = 5;
        $total = 0;

        $i = new Orders;
        $i->customer_id = $data['customer'];
        $i->description = $data['description'];
        $i->special_remarks = $data['special_remarks'];
        $i->created_by = Auth::id();
        $i->status = '1';
        $i->save();

        $r = 0;
        foreach($data['product'] as $val){
            $id = new OrderDetails;
            $id->order_id = $i->id;
            $id->product_id = $val;
            $id->quantity = $data['qty'][$r];
            $id->price = $data['price'][$r];
            $id->total = $data['price'][$r]*$data['qty'][$r];
            $id->save();

            $subtotal += ($data['price'][$r]*$data['qty'][$r]);

            $r++;
        }

        $vat = (($subtotal-$discount)/100)*$vat_per;
        $total = ($subtotal-$discount)+$vat;

        $i->subtotal = $subtotal;
        $i->discount = $discount;
        $i->vat = $vat;
        $i->total = $total;
        $i->save();

        return $i->id;
    }

    public static function order_update($data){
        $subtotal = 0;
        $discount = 0;
        $vat = 0;
        $vat_per = 5;
        $total = 0;

        $i = Orders::find($data['ord_id']);
        $i->customer_id = $data['customer'];
        $i->description = $data['description'];
        $i->special_remarks = $data['special_remarks'];
        $i->save();

        OrderDetails::where('order_id', $data['ord_id'])->delete();
        $r = 0;
        foreach($data['product'] as $val){
            $id = new OrderDetails;
            $id->order_id = $i->id;
            $id->product_id = $val;
            $id->quantity = $data['qty'][$r];
            $id->price = $data['price'][$r];
            $id->total = $data['price'][$r]*$data['qty'][$r];
            $id->save();

            $subtotal += ($data['price'][$r]*$data['qty'][$r]);

            $r++;
        }

        $vat = (($subtotal-$discount)/100)*$vat_per;
        $total = ($subtotal-$discount)+$vat;

        $i->subtotal = $subtotal;
        $i->discount = $discount;
        $i->vat = $vat;
        $i->total = $total;
        $i->save();

        return $i->id;
    }

    public function customer(){
        return $this->belongsTo(Customers::class, 'customer_id', 'id');
    }

    public function salesman(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function products(){
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }

}
