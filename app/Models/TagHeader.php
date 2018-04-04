<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagHeader extends Model
{
    protected $table = 'tag_headers';
	protected $fillable = ['tc_id','name'];
	protected $guarded = [];
    public $timestamps = false;


    public function tagDetails()
	{
		return $this->hasMany('App\Models\TagDetails');
	}

	public function tagCategory()
	{
		return $this->belongsTo('App\Models\TagCategory');
	}


}


