<?php

namespace App\Repositories;

use App\Models\Driver;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DriverRepository
 * @package App\Repositories
 * @version August 19, 2018, 8:21 pm UTC
 *
 * @method Driver findWithoutFail($id, $columns = ['*'])
 * @method Driver find($id, $columns = ['*'])
 * @method Driver first($columns = ['*'])
*/
class DriverRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'lga'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Driver::class;
    }
}
