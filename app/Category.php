<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function teste(){
        return $this->belongsTo();
    }
}
