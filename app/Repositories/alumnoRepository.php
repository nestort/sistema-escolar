<?php

namespace App\Repositories;

use App\Models\alumno;
use App\Repositories\BaseRepository;

/**
 * Class alumnoRepository
 * @package App\Repositories
 * @version June 11, 2021, 3:48 am UTC
*/

class alumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombres',
        'apepaterno',
        'apematerno',
        'carrera',
        'fecha_nac',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return alumno::class;
    }
}
