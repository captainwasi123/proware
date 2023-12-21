<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\OrderDetails;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public static function create($data){
        $p = new Products;
        $p->name = $data['name'];
        $p->brand_id = $data['brand_id'];
        $p->category_id = $data['category_id'];
        $p->price = $data['price'];
        $p->discount = empty($data['discount']) ? 0 : $data['discount'];
        $p->discription = empty($data['discription']) ? '' : $data['discription'];
        $p->status = $data['status'];
        $p->created_by = Auth::id();
        $p->save();

        return $p->id;
    }

    public static function product_update($id, $data){
        $p = Products::find($id);
        $p->name = $data['name'];
        $p->brand_id = $data['brand_id'];
        $p->category_id = $data['category_id'];
        $p->price = $data['price'];
        $p->discount = empty($data['discount']) ? 0 : $data['discount'];
        $p->discription = empty($data['discription']) ? '' : $data['discription'];
        $p->status = $data['status'];
        $p->save();

        return $p->id;
    }


    public function brand(){
        return $this->belongsTo(Brands::class, 'brand_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function orders(){
        return $this->hasMany(OrderDetails::class, 'product_id', 'id');
    }
}
