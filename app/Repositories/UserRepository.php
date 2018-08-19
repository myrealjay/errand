<?php

namespace App\Repositories;

use App\Models\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version August 19, 2018, 5:38 pm UTC
 *
 * @method User findWithoutFail($id, $columns = ['*'])
 * @method User find($id, $columns = ['*'])
 * @method User first($columns = ['*'])
*/
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'f_name',
        'l_name',
        'email',
        'phone_no',
        'password',
        'role'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
