<?php

namespace App\Repositories;

use App\Models\Customerinfo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CustomerinfoRepository
 * @package App\Repositories
 * @version August 19, 2018, 7:08 pm UTC
 *
 * @method Customerinfo findWithoutFail($id, $columns = ['*'])
 * @method Customerinfo find($id, $columns = ['*'])
 * @method Customerinfo first($columns = ['*'])
*/
class CustomerinfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'f_name',
        'l_name',
        'phone_no',
        'email',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customerinfo::class;
    }
}
