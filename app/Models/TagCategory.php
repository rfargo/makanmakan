<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagCategory extends Model
{
    protected $table = 'tag_categories';
	protected $fillable = ['name'];
	protected $guarded = [];
    public $timestamps = false;


    public function tagHeader()
	{
		return $this->hasMany('App\Models\TagHeader', 'tc_id', 'id');
	}
}
