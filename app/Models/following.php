<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class following extends Model
{
    use HasFactory;
    protected $fillable = ['following_id','follwer_id','status'];
}
