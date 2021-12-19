<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddAccessory extends Model
{
    use HasFactory;

    protected $fillable=['accessories_model','name','accessories_type','accessories_details','acc_img', 'accessories_price'];
}
