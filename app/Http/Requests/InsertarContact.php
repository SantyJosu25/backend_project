<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertarContact extends FormRequest
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
            'name' => 'required|max:40',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|digits:10',
            'message' => 'required|min:10'
        ];
    }

    public function attibutes(){
        return [
            'name' => 'Nombre',
            'email' => 'Correo',
            'phone' => 'Teléfono',
            'message' => 'Mensage'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Debe ingresar un nombre',
            'email.required' => 'Debe ingresar un correo',
            'phone.required' => 'Debe ingresar un teléfono',
            'message.required' => 'Debe ingresar un mensage'
        ];
    }
}
