<?php

namespace App\Models\address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    use HasFactory;

    protected $table = 'zones';
    
    protected $fillable = [
        'name',
        'state_id'
    ];
}
