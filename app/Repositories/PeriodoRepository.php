<?php

namespace App\Repositories;

use App\Models\Periodo;
use App\Repositories\BaseRepository;

/**
 * Class PeriodoRepository
 * @package App\Repositories
 * @version June 2, 2021, 5:15 am UTC
*/

class PeriodoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_inicio',
        'fecha_fin'
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
        return Periodo::class;
    }
}
