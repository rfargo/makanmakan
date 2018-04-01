<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealCourseDetails extends Model
{
    protected $table = 'meal_course_details';
	protected $fillable = ['recipe_id','mealcourse_id'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function mealCourse()
	{
		return $this->belongsTo('App\Models\MealCourse')
	}

	public function recipe()
    {
    	return $this->belongsTo('App\Models\Recipe');
    }
}
