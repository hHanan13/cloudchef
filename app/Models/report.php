<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $fillable = ['subject','content'];

    public function merchantData()
    {
    return $this->belongsTo(merchant::class);
    }
}
