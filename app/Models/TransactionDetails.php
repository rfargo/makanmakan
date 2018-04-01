<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    protected $table = 'transaction_details';
	protected $fillable = ['transaction_id','recipe_id','price','quantity'];
	protected $guarded = [];
    public $timestamps = false;
    
	public function recipe()
	{
		return $this->belongsTo('App\Models\Recipe');
	}

	public function transactionHeader()
	{
		return $this->belongsTo('App\Models\TransactionHeader');
	}
}
