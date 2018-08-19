<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Driver
 * @package App\Models
 * @version August 19, 2018, 8:21 pm UTC
 *
 * @property string f_name
 * @property string l_name
 * @property string phone_no
 * @property string email
 * @property string password
 * @property string address
 * @property string next_of_kin
 * @property string next_address
 * @property string bank_name
 * @property string bank_account
 * @property string state
 * @property string d_o_b
 * @property string nationality
 * @property string lga
 */
class Driver extends Model
{
    use SoftDeletes;

    public $table = 'drivers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'f_name',
        'l_name',
        'phone_no',
        'email',
        'password',
        'address',
        'next_of_kin',
        'next_address',
        'bank_name',
        'bank_account',
        'state',
        'd_o_b',
        'nationality',
        'lga',
        'picture'
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
        'password' => 'string',
        'address' => 'string',
        'next_of_kin' => 'string',
        'next_address' => 'string',
        'bank_name' => 'string',
        'bank_account' => 'string',
        'state' => 'string',
        'd_o_b' => 'string',
        'nationality' => 'string',
        'lga' => 'string',
        'picture' => 'string'
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
        'password' => 'required',
        'address' => 'required',
        'bank_name' => 'required',
        'bank_account' => 'required',
        'state' => 'required',
        'nationality' => 'required',
        'lga' => 'required'
    ];

    
}
