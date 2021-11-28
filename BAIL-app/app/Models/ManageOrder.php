<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageOrder extends Model
{
    use HasFactory;
    protected $table='Manage_Orders';
    protected $primaryKey='id';

    protected $fillable=['customer_id','customer_name','customer_address','product_id'];

    public function addProduct(){
        return $this->belongsTo(AddProduct::class);
    }
   
    // public function manageOrder(){
    //     return $this->hasMany(AddProduct::class);
    // }
}
