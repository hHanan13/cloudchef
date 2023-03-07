<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Auth;
use App\Models\following;
class merchant extends Authenticatable
{
    use HasFactory,HasApiTokens;

    protected $table = 'merchants';
    protected $guarded = ['id','created_at','updated_at'];
    protected $appends = ['image_path','isfollowed','rate'];
    protected $hidden = ['password'];

        public function getImagePathAttribute()
    {
        return asset('images/merchants/' . $this->image);

    }

    public function reportData()
    {
        return $this->hasMany(report::class,'merchant_id' , 'id');
    }
    public function invoiceData()
    {
        return $this->hasMany(Invoice::class,'merchant_id' , 'id');
    }

      public function getIsFollowedAttribute() {
            if(Auth::guard('api')->user()){
                $obj = following::where('follwer_id',auth()->guard('api')->user()->id)->where('following_id',$this->id)->first();
            if($obj)
                return 1; 
             else
                return 0;
            }else
            return 0;
    
    } 
    public function perfumeData()
    {
        return $this->belongsToMany(Perfume::class , 'perfume_merchants','merchant_id','perfume_id');
    }
     public function review_ratings()
    {
        return $this->morphMany(Rating::class, 'ratingable');
    }

     public function getRateAttribute()
    {
        return $this->review_ratings()->avg('star_rating');

    }

    public function follower()
    {
        return $this->belongsToMany(merchant::class , 'followings','following_id','follwer_id');
    }

      public function following()
    {
        return $this->belongsToMany(merchant::class , 'followings','follwer_id','following_id');
    }

    public function orderData()
    {
    return $this->hasMany('App\Models\order_detail','merchant_id');
    }
  
    public function perfumerequestData()
    {
    return $this->hasMany('App\Models\perfumerequest','merchant_id');
    }

    public function favouritePerfumes()
    {
       return $this->hasMany(Favourite::class)->where('favouriteable_type','App\Models\Perfume');
    }

     public function favouriteNotes()
    {
       return $this->hasMany(Favourite::class)->where('favouriteable_type','App\Models\Note');
    }

      public function favourites()
    {
       return $this->hasMany(Favourite::class);
    }

    // public function perfumes()
    // {
    //     return $this->belongsToMany(Perfume::class, 'favourites')->withPivot('perfume_id');
    // }//end of perfumes

    //  public function notes()
    // {
    //     return $this->belongsToMany(Note::class, 'favourites')->withPivot('note_id');
    // }//end of notes
      public function scopeSearch($query,$term){

        $term="%$term";
        $query->where(function ($query) use($term){
            $query->where('email','like',$term)
                ->OrWhere('name','like',$term);
        });
    }

}
