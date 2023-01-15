<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $appends = ['image_path','name','rate','description'];


    public function scopeSearch($query, $term)
    {
        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('name_ar', 'like', $term)
                ->OrWhere('name_en', 'like', $term);
        });
    }
     public function getImagePathAttribute()
    {
        return asset('images/packages/' . $this->image);

    }//end of get image path

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }// end of get name

   public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }// end of get name

  public function review_ratings()
    {
        return $this->morphMany(Rating::class, 'ratingable');
    }

     public function getRateAttribute()
    {
        return $this->review_ratings()->avg('star_rating');

    }

    public function order_details()
    {
        return $this->morphMany(order_detail::class, 'orderable');
    }
}
