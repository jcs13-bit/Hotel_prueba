<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'tipo_documento_id' => 'required|exists:tipo_documentos,id',
            'numero_documento' => 'required|numeric',
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'correo_electronico' => 'required|email|unique:clientes,correo_electronico',
            'fecha_nacimiento' => 'required|date',
        ];
    }
}
