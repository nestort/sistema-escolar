<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Periodo
 * @package App\Models
 * @version June 2, 2021, 5:15 am UTC
 *
 * @property string $fecha_inicio
 * @property string $fecha_fin
 */
class Periodo extends Model
{

    use HasFactory;

    public $table = 'periodos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'fecha_inicio',
        'fecha_fin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
