<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriversForm extends Model
{
    protected $fillable = ['f_name','l_name','d_o_b','email','address','phone_no'];
}
