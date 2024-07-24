<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table         = 'clientes';
    protected $primaryKey = 'cliente_id';
    protected $allowedFields = [
        'cliente_id', 'nombre', 'apellido', 'nit', 'telefono', 'correo_electronico', 'direccion', 'contrasenia',
    ];
}