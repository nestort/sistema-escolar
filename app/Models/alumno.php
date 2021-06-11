<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class alumno
 * @package App\Models
 * @version June 11, 2021, 3:48 am UTC
 *
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $incripciones
 * @property string $nombres
 * @property string $apepaterno
 * @property string $apematerno
 * @property string $carrera
 * @property string $fecha_nac
 * @property integer $user_id
 */
class alumno extends Model
{

    use HasFactory;

    public $table = 'alumnos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nombres',
        'apepaterno',
        'apematerno',
        'carrera',
        'fecha_nac',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombres' => 'string',
        'apepaterno' => 'string',
        'apematerno' => 'string',
        'carrera' => 'string',
        'fecha_nac' => 'date',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombres' => 'required|string|max:255',
        'apepaterno' => 'required|string|max:100',
        'apematerno' => 'required|string|max:100',
        'carrera' => 'required|string|max:100',
        'fecha_nac' => 'required',
        'user_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function incripciones()
    {
        return $this->hasMany(\App\Models\Incripcione::class, 'alumno_id');
    }
}
