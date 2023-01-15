<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    protected $table = 'favourites';

    protected $fillable = [
       'favouriteable_type', 'favouriteable_id','created_at', 'updated_at' ,'merchant_id'
    ];
    protected $with = ['favouriteable'];

    public function favouriteable()
    {
        return $this->morphTo();
    }
}
