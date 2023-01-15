<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfumeMerchant extends Model
{
    use HasFactory;
    protected $fillable = ['merchant_id','perfume_id','status'];
    
}
