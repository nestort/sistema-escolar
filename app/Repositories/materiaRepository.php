<?php

namespace App\Repositories;

use App\Models\Materia;
use App\Repositories\BaseRepository;

/**
 * Class MateriaRepository
 * @package App\Repositories
 * @version June 11, 2021, 3:57 am UTC
*/

class MateriaRepository extends BaseRepository
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
        return Materia::class;
    }
}
