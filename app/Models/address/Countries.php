<?php

namespace App\Models\address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    protected $table = 'countries';
    
    protected $fillable = [
        'name'
    ];
}
