<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsTo(Car::class, 'car');
    }
}
