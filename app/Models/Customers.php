<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';

    public static function create($data){
        $p = new Customers;
        $p->name = $data['name'];
        $p->email = empty($data['email']) ? '' : $data['email'];
        $p->landline = empty($data['landline']) ? '' : $data['landline'];
        $p->mobile = $data['mobile'];
        $p->customer_type = $data['customer_type'];
        $p->contact_person = $data['contact_person'];
        $p->contact_person_mobile = $data['contact_person_mobile'];
        $p->shop_no = $data['shop_no'];
        $p->building_floor = $data['building_floor'];
        $p->country_id = $data['country_id'];
        $p->state_id = $data['state_id'];
        $p->zone_id = $data['zone_id'];
        $p->description = empty($data['description']) ? '' : $data['description'];
        $p->special_remarks = empty($data['special_remarks']) ? '' : $data['special_remarks'];
        $p->status = $data['status'];
        $p->created_by = Auth::id();
        $p->save();

        return $p->id;
    }
}
