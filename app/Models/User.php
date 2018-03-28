<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['firstName','lastName','username', 'email', 'password','accessLevel','isDeleted'];
    protected $guarded = [];
}
