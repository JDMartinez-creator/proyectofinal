<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Datos extends FormRequest
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
            'titulo' => 'required',
            'intro' => 'required',
            'contenido' => 'required',
            'fecha' => 'required',
        ];
    }
    public function messages()
{
    return [
        'titulo.required' => 'Hace falta un titulo',
        'intro.required'  => 'Hace falta una introducción',
        'contenido.required'  => 'Hace falta el contenido',
        'fecha.required'  => 'Ingrese una fecha',
    ];
}
}
