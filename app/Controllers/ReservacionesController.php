<?php

namespace App\Controllers;
use App\Models\ReservacionesModel;
class ReservacionesController extends BaseController
{
    public function index(): string
    {
        $reservacion = new ReservacionesModel();
        $datos['datos']=$reservacion->findAll();
        return view('reservaciones',$datos);
    }
}