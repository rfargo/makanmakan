<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
	protected $fillable = ['user_id','title','about','pictureURL','servingQty','servingUnit','preparation','views','dateCreated','datePublished','isPublic','isDeleted'
];
	protected $guarded = [];

	public function savedRecipes()
	{
		return $this->hasMany('App\Models\SavedRecipe');
	}

	public function cuisineDetails()
	{
		return $this->hasMany('App\Models\CuisineDetails');
	}

	public function mealCourseDetails()
	{
		return $this->hasMany('App\Models\MealCourseDetails');
	}

	public function dietaryConsiderationDetails()
	{
		return $this->hasMany('App\Models\DietaryConsiderationDetails');
	}

	public function ingredientDetails()
	{
		return $this->hasMany('App\Models\IngredientDetails');
	}

	public function transactionDetails()
	{
		return $this->hasMany('App\Models\TransactionDetails');
	}

	public function reviews()
	{
		return $this->hasMany('App\Models\Review');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
