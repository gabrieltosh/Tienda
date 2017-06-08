<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
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
            'nombre'=>'required|max:50',
            'apellido'=>'required|max:50',
            'email'=>'required|email|unique:users',
            'usuario'=>'required|unique:users|min:4|max:20',
            'password'=>'required|confirmed'

        ];
    }
}
