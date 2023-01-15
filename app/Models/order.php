<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Appstract\Stock\HasStock;
use Auth;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = ['id','created_at','updated_at'];
    protected $with = ['details'];

    protected $fillable = [
        'date', 'total','status','created_at', 'updated_at','merchant_id','payment_in_installments'
    ];

    public function details(){
        return $this->hasMany(order_detail::class);
    }

    public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('status','like',$term);
        });
    }
   
}
