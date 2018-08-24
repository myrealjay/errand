<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerRecord extends Model
{
    protected $fillable = ['from_location','to_location','contact_person','contact_phone','description','trip_type','price','status'];

    
}
