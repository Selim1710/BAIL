<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    use HasFactory;
    protected $table='Add_products';
    protected $primaryKey='id';

    protected $fillable=['product_model','name','product_type','product_details','image_path'];

    public function manageOrder(){
        return $this->belongsTo(ManageOrder::class);
    }

    // public $timestamps=false;
}
