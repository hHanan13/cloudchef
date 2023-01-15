<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';

    protected $fillable = [
       'feedbackable_type', 'feedbackable_id', 'email' ,'name', 'text','created_at', 'updated_at'
    ];

    public function feedbackable()
    {
        return $this->morphTo();
    }
}
