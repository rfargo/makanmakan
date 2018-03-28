<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuisineDetails extends Model
{
    protected $table = 'cuisine_details';
    protected $fillable = ['recipe_id','cuisine_id'];
    protected $guarded = [];

    public function cuisine()
    {
    	return $this->belongsTo('App\Models\Cuisine');
    }

    public function recipe()
    {
    	return $this->belongsTo('App\Models\Recipe');
    }
}
