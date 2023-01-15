<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function findByCode($code) {
        return self::where('code', $code)->first();
    }

    public function discount($total) {
        if($this->type == 'fixed') {
            return $this->value;
        } else if($this->type == 'percent_off') {
            return ($this->percent_off / 100) * $total;
        } else {
            return 0;
        }
    }

    public function scopeSearch($query, $term)
    {

        $term = "%$term";
        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term)
                ->OrWhere('code', 'like', $term);
        });
    }
}
