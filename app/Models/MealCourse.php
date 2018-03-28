<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealCourse extends Model
{
   	protected $table = 'meal_courses';
	protected $fillable = ['name'];
	protected $guarded = [];
}
