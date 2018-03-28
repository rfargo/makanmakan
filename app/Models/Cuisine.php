<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    protected $table = 'cuisines';
    protected $fillable = ['name'];
    protected $guarded = [];

    public function cuisineDetails()
    {
    	return $this->hasMany('App\Models\CuisineDetails');
    }
}
