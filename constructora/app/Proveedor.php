<?php

namespace constructora;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table='proveedor';

    protected $primaryKey='pro_rut';
    
    public $timestamps=false;

    protected $fillabel =[
        'pro_rut',
    	'pro_nombre',
    	'pro_direccion',
    	'pro_telefono',
        'pro_condicion'
    ];

    protected $guarded =[
    	
    ];
}
