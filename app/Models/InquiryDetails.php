<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class InquiryDetails extends Model
{
    use HasFactory;
    protected $table = 'inquiries_details';


    public function product(){
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
}
