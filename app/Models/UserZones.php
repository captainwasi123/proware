<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\address\Zones;

class UserZones extends Model
{
    use HasFactory;
    protected $table = 'user_zones';


    protected $fillable = [
        'user_id',
        'zone_id'
    ];

    public function zone(){
        return $this->belongsTo(Zones::class, 'zone_id', 'id');
    }
}
