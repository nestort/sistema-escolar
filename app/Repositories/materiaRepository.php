<?php

namespace App\Repositories;

use App\Models\materia;
use App\Repositories\BaseRepository;

/**
 * Class materiaRepository
 * @package App\Repositories
 * @version June 11, 2021, 3:57 am UTC
*/

class materiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'horario',
        'min_participantes',
        'max_participantes',
        'periodo_id'
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
        return materia::class;
    }
}
