<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'phone',
        'job_name',
        'city',
        'age',
    ];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('images/jobs/' . $this->image);

    }//end of get image path

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'job_name' =>$this->job_name,
            'type' =>$this->type,
            'age' =>$this->age,
        ];
    }
}
