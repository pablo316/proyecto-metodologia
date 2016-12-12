<?php

namespace constructora\Http\Requests;

use constructora\Http\Requests\Request;

class ClienteFormRequest extends Request
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
            'cli_rut'=>'max:8|min:8|required',
            'cli_dv'=>'max:1|min:1',
            'cli_nombre'=>'max:20',
            'cli_apellidopaterno'=>'max:20',
            'cli_apellidomaterno'=>'max:20',
            'cli_razonsocial'=>'max:20',
            'cli_giro'=>'max:30',
            'cli_direccion'=>'max:20',
            'cli_telefono'=>'max:20',
            'cli_representante'=>'max:20',
        ];
    }
}
