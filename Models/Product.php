<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; 
    protected $table = 'products'; 
    protected $fillable = ['product_id', 'price','stock','name']; 
    protected $casts = [ 
    'created_at' => 'datetime', 
    'updated_at' => 'datetime', 
        ]; 
        public function productEntries(){ 
        return $this->belongsToMany(DiaryEntry::class, 'diary_entry_emotions') 
                       ->withPivot('intensity') 
                       ->withTimestamps(); 
       } 
}
