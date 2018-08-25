<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerinfo extends Model
{
    protected $fillable = ['f_name','l_name','phone_no','email','password','authorization_code'];

    protected $hidden = ['password'];
}
