<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    protected $table = 'transaction_headers';
	protected $fillable = ['user_id','status','deliveryAddress','dateSent','dateReceived','dateOrdered'];
	protected $guarded = [];
    public $timestamps = false;
    public $timestamps = false;
    
	public function transactionDetails()
	{
		return $this->hasMany('App\Models\TransactionDetails');
	}

	public function payment()
	{
		return $this->hasOne('App\Models\Payment');
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
