<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedRecipe extends Model
{
    protected $table = 'saved_recipes';
	protected $fillable = ['recipe_id','user_id'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function recipe()
	{
		return $this->belongsTo('App\Models\Recipe');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
