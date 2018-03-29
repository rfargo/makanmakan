<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['firstName','lastName','username', 'email', 'password','accessLevel','isDeleted'];
    protected $guarded = [];

    public function savedArticles()
    {
    	return $this->hasMany('App\Models\SavedArticle');
    }

    public function savedRecipes()
    {
    	return $this->hasMany('App\Models\SavedRecipe');
    }

    public function articles()
    {
    	return $this->hasMany('App\Models\Article');
    }

    public function transactionHeaders()
    {
    	return $this->hasMany('App\Models\TransactionHeader');
    }

    public function reportedReviews()
    {
    	return $this->hasMany('App\Models\ReportedReview');
    }

    public function reviews()
    {
    	return $this->hasMany('App\Models\Review');
    }

    public function recipes()
    {
    	return $this->hasMany('App\Models\Recipe');
    }
}
