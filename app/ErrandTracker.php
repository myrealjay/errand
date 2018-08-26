<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErrandTracker extends Model
{
    protected $fillable = ['orderID','status','driverID','customerID'];
}
