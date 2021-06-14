<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class materia
 * @package App\Models
 * @version June 11, 2021, 3:57 am UTC
 *
 * @property \App\Models\Periodo $periodo
 * @property \Illuminate\Database\Eloquent\Collection $incripciones
 * @property string $nombre
 * @property string $horario
 * @property integer $min_participantes
 * @property integer $max_participantes
 * @property integer $periodo_id
 */
class Materia extends Model
{

    use HasFactory;

    public $table = 'materias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nombre',
        'horario',
        'min_participantes',
        'max_participantes',
        'periodo_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'horario' => 'date',
        'min_participantes' => 'integer',
        'max_participantes' => 'integer',
        'periodo_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:255',
        'horario' => 'nullable',
        'min_participantes' => 'required|integer',
        'max_participantes' => 'required|integer',
        'periodo_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function periodo()
    {
        return $this->belongsTo(\App\Models\Periodo::class, 'periodo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function incripciones()
    {
        return $this->hasMany(\App\Models\Incripcione::class, 'materia_id');
    }
}
