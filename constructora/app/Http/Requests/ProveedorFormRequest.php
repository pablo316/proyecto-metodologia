<?php

namespace constructora\Http\Requests;

use constructora\Http\Requests\Request;

class ProveedorFormRequest extends Request
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
            'pro_rut'=>'required|max:8|min:8',
            'pro_dv'=>'max:1|min:1',
            'pro_nombre'=>'max:20',
            'pro_direccion'=>'max:20',
            'pro_telefono'=>'max:20',
        ];
    }
}
