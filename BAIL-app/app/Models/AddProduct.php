<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    use HasFactory;
    protected $table='add_products';
    protected $primaryKey='id';

    protected $fillable=['product_model','name','product_price','product_type','product_details','total_produce','image_path'];

    // public $timestamps=false;

    public function stock(){
        return $this->belongsTo(Stock::class);
    }
}
