<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $table = "wishList";
    protected $fillable = ['user_id', 'product_id', 'price'];

    // public function user(){
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // public function product(){    
    //     return $this->belongsToMany(Product::class,'product_id','price');
    // }
}
