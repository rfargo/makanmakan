<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedArticle extends Model
{
    protected $table = 'saved_articles';
	protected $fillable = ['article_id','user_id'];
	protected $guarded = [];

	public function article()
	{
		return $this->belongsTo('App\Models\Article');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
