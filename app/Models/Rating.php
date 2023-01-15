<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $with = ['merchant'];
    use HasFactory;
    protected $fillable = ['comment','star_rating','merchant_id','ratingable_id','ratingable_type'];


    public function ratingable()
    {
        return $this->morphTo();
    }

     public function merchant()
    {
    return $this->belongsTo(merchant::class);
    }
}
