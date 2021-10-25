<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_number',
        'codigo_pasarela',
        'fecha',
        'id_historial_membresia',
        'ip_pago',
        'monto',
        'status',
        'tipo_tarjeta'
    ];
}
