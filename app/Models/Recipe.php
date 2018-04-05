<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
	protected $fillable = ['user_id','title','about','pictureURL','servingQty','servingUnit','preparation', 'qty', 'price', 'dateCreated', 'isDeleted'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function savedRecipes()
	{
		return $this->hasMany('App\Models\SavedRecipe');
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
