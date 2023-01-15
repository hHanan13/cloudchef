<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $appends = ['name'];

    public function cities()
    {
    return $this->hasMany('App\Models\City' , 'country_id');
    }

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
