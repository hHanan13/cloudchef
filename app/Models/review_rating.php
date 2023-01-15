<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\seller;
use App\Models\workshop;
use App\Models\Perfume;

class review_rating extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'review_ratings';
    

    public function sellersData()
    {
    return $this->belongsTo(seller::class);
    }

    public function perfumeData()
    {
    return $this->belongsTo(Perfume::class);
    }

    public function noteData()
    {
    return $this->belongsTo(Note::class);
    }

    public function reviewratingable()
    {
        return $this->morphTo();
    }

}
