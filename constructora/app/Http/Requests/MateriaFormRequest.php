<?php

namespace constructora\Http\Requests;

use constructora\Http\Requests\Request;

class MateriaFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'pro_rut'=>'max:20', 
        'mat_nombre'=>'max:20',
        'mat_marca'=>'max:20',
        'mat_stockini'=>'max:20', 
        'mat_stockmin'=>'max:20',  
        'mat_fechaad'=>'max:20',  
        'mat_precio'=>'max:20',
        ];
    }
}
