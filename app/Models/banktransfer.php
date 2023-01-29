<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banktransfer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en', 
        'email',
    ];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('images/banktransfers/' . $this->image);

    }//end of get image path
    public function scopeSearch($query, $term)
    {
        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('name_ar', 'like', $term)
                ->OrWhere('name_en', 'like', $term);
        });
    }


    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }// end of get name
}
