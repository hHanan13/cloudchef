<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class order_detail extends Model
{
    protected $table = 'order_details';

    protected $fillable = [
        'product','package' ,'note' , 'total','subtotal','payment_method', 'payment_sallary', 'shipping','paid', 'batch_id', 'amount','status','created_at', 'updated_at','order_id'
    ];

    public function merchantData()
    {
    return $this->belongsTo(merchant::class);
    }

    protected $casts = [
        'payment_sallary'=>'array',
    ];

    public function orderable()
    {
        return $this->morphTo();
    }
   

}
