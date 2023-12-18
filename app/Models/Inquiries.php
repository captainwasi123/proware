<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InquiryDetails;
use Auth;

class Inquiries extends Model
{
    use HasFactory;
    protected $table = 'inquiries';

    public static function create($data){

        $i = new Inquiries;
        $i->customer_id = $data['customer'];
        $i->description = $data['description'];
        $i->special_remarks = $data['special_remarks'];
        $i->created_by = Auth::id();
        $i->save();

        $r = 0;
        foreach($data['product'] as $val){
            $id = new InquiryDetails;
            $id->inquiry_id = $i->id;
            $id->product_id = $val;
            $id->quantity = $data['qty'][$r];
            $id->price = $data['price'][$r];
            $id->total = $data['price'][$r]*$data['qty'][$r];
            $id->save();

            $r++;
        }

        return $i->id;
    }
}
