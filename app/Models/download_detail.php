<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class download_detail extends Model
{
    protected $table = 'download_details';

    protected $fillable = [
        'product', 'total','subtotal','payment_method', 'payment_sallary', 'shipping','paid', 'batch_id', 'amount','status','created_at', 'updated_at'
    ];

    protected $casts = [
        'payment_sallary'=>'array',
    ];
}
