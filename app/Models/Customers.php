<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\address\Countries;
use App\Models\address\States;
use App\Models\address\Zones;
use App\Models\CustomerType;
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


    public static function customer_update($id, $data){
        $p = Customers::find($id);
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
        $p->save();

        return $p->id;
    }


    public function country(){
        return $this->belongsTo(Countries::class, 'country_id', 'id');
    }

    public function state(){
        return $this->belongsTo(States::class, 'state_id', 'id');
    }

    public function zone(){
        return $this->belongsTo(Zones::class, 'zone_id', 'id');
    }

    public function type(){
        return $this->belongsTo(CustomerType::class, 'customer_type', 'id');
    }
}
