<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservarRequest extends FormRequest
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
            'habitacion_id' => 'required|exists:habitaciones,id',
            'numero_documento' => 'required|numeric',
            'numero_dias' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'nombre_cliente' => 'required|string',
            'estado' => 'required|string',
            'responsable' => 'required|string',
            'habitacion_id'=> 'required|string',
        ];
    }
}
