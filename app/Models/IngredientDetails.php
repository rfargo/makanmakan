<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngredientDetails extends Model
{
    protected $table = 'ingredient_details';
	protected $fillable = ['recipe_id','ingredient_id','quantity','unit'];
	protected $guarded = [];
}
