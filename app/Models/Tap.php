<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tap extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'email', 
        'tran_id',
        'amount',
    ];
}
