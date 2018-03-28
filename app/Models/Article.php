<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['user_id','title','content', 'datePosted', 'dateCreated','isPublic','isDeleted'];
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function savedArticles()
    {
    	return $this->hasMany('App\Models\SavedArticle');
    }

}
