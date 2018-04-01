<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DietaryConsiderationDetails extends Model
{
    protected $table = 'dietary_consideration_details';
	protected $fillable = ['recipe_id','dc_id'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function dietaryConsideration()
	{
		return $this->belongsTo('App\Models\DietaryConsideration');
	}

	public function recipe()
    {
    	return $this->belongsTo('App\Models\Recipe');
    }
}
