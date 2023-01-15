<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TapData extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'number', 
        'exp_month',
        'exp_year',
        'cvc',
    ];
}
