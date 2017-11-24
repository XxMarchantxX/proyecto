<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearObrasRequest extends FormRequest
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
          'nombre_obra'=>'required',
          'nombre_constructora'=>'required',
          'direccion'=>'required',
          'nombre_ingeniero'=>'required',
          'email'=>'required',
          'telefono' =>'required|integer'
        ];
    }
}
