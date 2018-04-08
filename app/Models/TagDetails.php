<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagDetails extends Model
{
    protected $table = 'tag_details';
	protected $fillable = ['recipe_id','tag_id'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function tagHeader()
	{
		return $this->hasMany('App\Models\TagHeader','id','tag_id');
	}

	public function recipe()
    {
    	return $this->belongsTo('App\Models\Recipe');
    }
}
