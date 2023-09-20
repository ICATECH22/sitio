<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuzonPostRequest extends FormRequest
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
            //
            'formFileMultiple' => ['max:3072', 'mimes:doc,docx,pdf,xls,xlsx,png,jpeg,jpg'],
            'actividad' => ['required'],
            'nombre' => ['required'],
            'correo_electronico' => ['required', 'email']
        ];
    }

    public function messages(){
        return [
            'formFileMultiple.max' => 'El :attribute no puede ser mayor a 3MB',
            'formFileMultiple.mimes' => 'Sólo se permiten documentos tipos PDF, Word, excel, png, jpeg, jpg como :attribute',
            'actividad.required' => 'La :attribute es requerida',
            'nombre.required' => 'El :attribute es requerido',
            'correo_electronico.required' => 'El :attribute es requerido',
            'correo_electronico.email' => 'No se ingresó un :attribute válido'
        ];
    }

    public function attributes(){
        return [
            'formFileMultiple' => 'Archivo',
            'actividad' => 'Actividad',
            'nombre' => 'Nombre',
            'correo_electronico' => 'Correo'
        ];
    }
}
