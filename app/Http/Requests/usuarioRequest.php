<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
Request::cookie('usuario');

class usuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //si no hay permisos dejar en true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | max:255',
            'last_name' => 'required | max:255',
            'email' => 'required | email | max:255',
            'phone' => 'required | max:15',
        ];
    }
    public function attributes() {
        return [
          "name" => 'nombre',
          "last_name" => 'apellido',
          'email' => 'email',
          "phone" => 'teléfono'
        ];
    }
    //mensaje personalizado de los campos no rellenados del formulario (sino sale por defecto en inglés)
    public function messages(){
        return [
            "name.required" => "El :attribute es un parametro requerido",
            "last_name.required" => "El :attribute es un parametro requerido",
            "email.required" => "El :attribute es un parametro requerido",
            "phone.required" => "El :attribute no es un parametro requerido",
        ];
       }
}
