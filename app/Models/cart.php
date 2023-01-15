<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory; 
    protected $guarded = [];
    protected $table = 'carts';
    protected $fillable = [
        'product_name_ar', 
        'product_name_en', 
        'price',
        'quantity',
        'total',
        'subtotal',
    ];  
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('images/carts/' . $this->image);

    }//end of get image path
    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->product_name_ar : $this->product_name_en;
    }// end of get name
}
