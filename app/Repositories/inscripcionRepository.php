<?php

namespace App\Repositories;

use App\Models\Inscripcion;
use App\Repositories\BaseRepository;

/**
 * Class inscripcionRepository
 * @package App\Repositories
 * @version June 11, 2021, 3:59 am UTC
*/

class inscripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'materia_id',
        'alumno_id',
        'status'
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
        return Inscripcion::class;
    }
}
