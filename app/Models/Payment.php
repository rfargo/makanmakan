<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
	protected $fillable = ['transaction_id','paymentMethod','paymentStatus','paymentDate'];
	protected $guarded = [];

	public function transactionHeader()
	{
		return $this->belongsTo('App\Models\TrasnsactionHeader');
	}
}
