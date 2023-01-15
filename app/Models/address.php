<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'block', 'street','apartment','city', 'region','governorate','created_at', 'updated_at','merchant_id'
    ];

    public function accountdetailData()
    {
    return $this->belongsTo(account_detail::class);
    }

    public function merchant()
    {
    return $this->belongsTo(merchant::class);
    }


    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('block', 'like', $term)
                ->OrWhere('street', 'like', $term);
        });
    }
}
