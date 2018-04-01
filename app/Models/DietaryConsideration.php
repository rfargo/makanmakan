<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DietaryConsideration extends Model
{
	protected $table = 'dietary_considerations';
	protected $fillable = ['id'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function dietaryConsiderationDetails()
	{
		return $this->hasMany('App\Models\DietaryConsiderationDetails');
	}
}
