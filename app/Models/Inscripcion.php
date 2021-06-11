<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class inscripcion
 * @package App\Models
 * @version June 11, 2021, 3:59 am UTC
 *
 * @property \App\Models\Alumno $alumno
 * @property \App\Models\Materia $materia
 * @property integer $materia_id
 * @property integer $alumno_id
 * @property string $status
 */
class Inscripcion extends Model
{

    use HasFactory;

    public $table = 'inscripciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'materia_id',
        'alumno_id',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'materia_id' => 'integer',
        'alumno_id' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'materia_id' => 'required',
        'alumno_id' => 'required',
        'status' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function alumno()
    {
        return $this->belongsTo(\App\Models\Alumno::class, 'alumno_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function materia()
    {
        return $this->belongsTo(\App\Models\Materia::class, 'materia_id');
    }
}
