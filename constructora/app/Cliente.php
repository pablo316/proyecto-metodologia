<?php

namespace constructora;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';

    protected $primaryKey='cli_rut';
    
    public $timestamps=false;

    protected $fillabel =[
        'cli_rut',
        'cli_dv',
    	'cli_nombre',
        'cli_apellidopadre',
        'cli_apellidomadre',
        'cli_razonsocial',
        'cli_giro',
    	'cli_direccion',
    	'cli_telefono',
        'cli_representante',
        'cli_condicion'
    ];

    protected $guarded =[
    	
    ];
}
