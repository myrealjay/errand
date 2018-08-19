<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customerinfo
 * @package App\Models
 * @version August 19, 2018, 7:08 pm UTC
 *
 * @property string f_name
 * @property string l_name
 * @property string phone_no
 * @property string email
 * @property string password
 */
class Customerinfo extends Model
{
    use SoftDeletes;

    public $table = 'customerinfos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'f_name',
        'l_name',
        'phone_no',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'f_name' => 'string',
        'l_name' => 'string',
        'phone_no' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'f_name' => 'required',
        'l_name' => 'required',
        'phone_no' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    
}
