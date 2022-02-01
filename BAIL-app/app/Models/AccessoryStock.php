<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessoryStock extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function addAccessory(){
        return $this->belongsTo(AddAccessory::class);
    }
}
