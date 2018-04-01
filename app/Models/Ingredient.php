<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
	protected $fillable = ['name'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function ingredientDetails()
	{
		return $this->hasMany('App\Models\IngredientDetails');
	}
}
