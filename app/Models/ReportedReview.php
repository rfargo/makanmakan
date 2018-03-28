<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportedReview extends Model
{
    protected $table = 'reported_reviews';
	protected $fillable = ['review_id','user_id','reason','dateReported'];
	protected $guarded = [];

	public function review()
	{
		return $this->belongsTo('App\Models\Review');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
