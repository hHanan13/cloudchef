<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\seller;
use App\Models\workshop;
use Auth;

class Perfume extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'perfumes';
    protected $appends = ['image_path','rate','isfavourite'];

    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');
        
       }
    
        public function feedback_request()
        {
            return $this->morphMany(feedback::class, 'feedbackable');
        }

    public function review_ratings()
    {
        return $this->morphMany(Rating::class, 'ratingable');
    }

       public function getIsFavouriteAttribute() {
            if(Auth::guard('api')->user()){
                $obj=Auth::guard('api')->user()->favouritePerfumes()->where('favouriteable_id',$this->id)->first(); 
            if($obj)
                return 1; 
             else
                return 0;
            }else
              return 0;
    
    }
     public function getRateAttribute()
    {
        return $this->review_ratings()->avg('star_rating');

    }
     

    public function favourite()
    {
        return $this->morphMany(Favourite::class, 'favouriteable');
    }
    
    // public function merchantData()
    // {
    // return $this->belongsTo(merchant::class);
    // }

    public function merchants()
    {
        return $this->belongsToMany(merchant::class , 'perfume_merchants');
    }

    public function sellerData()
    {
    return $this->belongsTo(seller::class);
    }
    public function workshopData()
    {
    return $this->belongsTo(workshop::class);
    }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'favourites')->withPivot('user_id');
    // }//end of users

    public function getImagePathAttribute()
    {
        return asset('images/perfumes/' . $this->image);

    }//end of get image path

    public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('perfume_name_en','like',$term)
                ->OrWhere('price','like',$term);
        });
    }

 public function order_details()
    {
        return $this->morphMany(order_detail::class, 'orderable');
    }

}
