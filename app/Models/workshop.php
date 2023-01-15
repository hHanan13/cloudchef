<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\review_rating;
use App\Models\Perfume;
use App\Models\Contact;

class workshop extends Model
{
    protected $guarded = [];
    protected $table = 'workshops';

    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('work_name', 'like', $term)
                ->OrWhere('price', 'like', $term);
        });
    }

    public function reviewData()
    {
    return $this->hasMany('App\Models\review_rating','workshop_id');
    }

    public function perfumeData()
    {
    return $this->hasMany('App\Models\Perfume','workshop_id');
    }

    public function contactData()
    {
    return $this->hasMany('App\Models\Contact','workshop_id');
    }
}
