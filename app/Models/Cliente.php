<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidos', 'numero_documento', 'tipo_documento_id', 'correo_electronico', 'fecha_nacimiento'];
}
