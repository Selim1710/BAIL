<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddAccessory extends Model
{
    use HasFactory;
    protected $tables = 'add_accessories';
    protected $primaryKey='id';

    protected $fillable=['name','accessories_type','accessories_details','acc_img', 'accessories_price'];

    public function accessoryStock(){
        return $this->belongsTo(AccessoryStock::class);
    }
}
