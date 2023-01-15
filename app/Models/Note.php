<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Appstract\Stock\HasStock;
use Auth;

class Note extends Model
{
    use HasFactory , HasStock;

    protected $guarded = ['id','created_at','updated_at'];
    protected $appends = ['image_path', 'name','description','rate','isfavourite'];

public function getIsFavouriteAttribute() {
      
  
           if(Auth::guard('api')->user()){
            $obj = Auth::guard('api')->user()->favouriteNotes()->where('favouriteable_id',$this->id)->first();
            if($obj)
                return 1; 
             else
                return 0;
        }else
        return 0;
              
    }
    public function getImagePathAttribute()
    {
        return asset('/images/notes/' . $this->image);
    }

     public function getRateAttribute()
    {
        return $this->review_ratings()->avg('star_rating');

    }

    public function review_ratings()
    {
        return $this->morphMany(Rating::class, 'ratingable');
    }


     public function order_details()
    {
        return $this->morphMany(order_detail::class, 'orderable');
    }

    public function categoryData()
    {
    return $this->belongsTo(Category::class);
    }

    public function feedback_request()
    {
        return $this->morphMany(feedback::class, 'feedbackable');
    }

    public function favourite()
    {
        return $this->morphMany(Favourite::class, 'favouriteable');
    }

     public function category()
     {
        
    return $this->belongsTo(Category::class,'category_id','id');
   }

    public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('name_ar','like',$term)
                ->OrWhere('name_en','like',$term);
        });
    }


    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }

      public function getDescriptionAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->description_ar : $this->description_en;
    }

   

}
