<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version August 19, 2018, 5:38 pm UTC
 *
 * @property string f_name
 * @property string l_name
 * @property string email
 * @property string phone_no
 * @property string password
 * @property integer role
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'f_name',
        'l_name',
        'email',
        'phone_no',
        'password',
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'f_name' => 'string',
        'l_name' => 'string',
        'email' => 'string',
        'phone_no' => 'string',
        'password' => 'string',
        'role' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'f_name' => 'required',
        'l_name' => 'required',
        'email' => 'required',
        'phone_no' => 'required',
        'password' => 'required',
        'role' => 'required'
    ];

    
}
