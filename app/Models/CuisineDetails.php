<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuisineDetails extends Model
{
    protected $table = 'cuisine_details';
    protected $fillable = ['recipe_id','cuisine_id'];
    protected $guarded = [];
}
