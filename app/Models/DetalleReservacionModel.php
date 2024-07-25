<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleReservacionModel extends Model
{
    protected $table         = 'detalle_reservacion';
    protected $primaryKey = 'reservacion_id';
    protected $allowedFields = [
        'reservacion_id', 'habitacion_id', 'fecha_ingreso', 'fecha_salida', 'nombre_reservacion',
    ];
}