<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    use HasFactory;
    protected $fillable=['product_model','name','product_type','product_details','image_path'];

    public $timestamps=false;
}
