<?php

namespace constructora;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table='materia';

    protected $primaryKey='mat_codigo';
    
    public $timestamps=false;

    protected $fillabel =[
        'pro_rut',
    	'mat_nombre',
    	'mat_marca',
    	'mat_stockini',
        'mat_stockmin',
        'mat_precio',
        'imagen',
        'mat_condicion'

];

    protected $guarded =[
    	
    ];
}
