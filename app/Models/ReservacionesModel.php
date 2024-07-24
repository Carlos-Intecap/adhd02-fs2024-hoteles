<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservacionesModel extends Model
{
    protected $table         = 'reservaciones';
    protected $primaryKey = 'reservacion_id';
    protected $allowedFields = [
        'reservacion_id', 'fecha', 'cliente_id', 'hotel_id', 'descripcion', 'usuario_id',
    ];
}