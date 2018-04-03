<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/User','UserController');

Route::resource('/Recipe','RecipeController');

Route::resource('/Article','ArticleController');

Route::resource('/Review','ReviewController');

Route::resource('/ReportedReview','ReportedReviewController'); 

Route::resource('/Ingredient','IngredientController');

Route::resource('/IngredientDetails','IngredientDetailsController');

Route::resource('/Payment','PaymentController');

Route::resource('/SavedArticle','SavedArticleController');

Route::resource('/SavedRecipe','SavedRecipeController');

Route::resource('/TransactionDetails','TransactionDetailsController');

Route::resource('/TransactionHeader','TransactionHeaderController');

Route::resource('/TagCategory','TagCategoryController');//HERE

Route::resource('/TagHeader','TagHeaderController');

Route::resource('/TagDetails','TagDetailsController');


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('recover', 'AuthController@recover');
Route::group(['middleware' => ['jwt.auth']], function() {
    Route::get('logout', 'AuthController@logout');
    Route::get('test', function(){
        return response()->json(['foo'=>'bar']);
    });
});

Route::get('user/verify/{verification_code}', 'AuthController@verifyUser');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');