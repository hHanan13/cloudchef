<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = ['client_name', 'phone', 'brand_name', 'city', 'email', 'website', 'date', 'clock', 'product', 'quantity', 'price', 'discount', 'final_price', 'notes'];
}
