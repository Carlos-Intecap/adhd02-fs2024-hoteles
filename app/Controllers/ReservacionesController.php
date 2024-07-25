<?php

namespace App\Controllers;
use App\Models\ReservacionesModel;
use App\Models\DetalleReservacionModel;
class ReservacionesController extends BaseController
{
    public function index(): string
    {
        $reservacion = new ReservacionesModel();
        $datos['datos']=$reservacion->findAll();
        return view('reservaciones',$datos);
    }
    public function nuevaReservacion(): string
    {
        return view('reservaciones_nuevas');
    }
    public function agregarReservacion()
    {
        $datos=[
            'reservacion_id' => $this->request->getVar('txtReservacionId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        $reservaciones = new ReservacionesModel();
        $reservaciones->insert($datos);
        return redirect()->route('reservaciones');
    }
    public function eliminarReservacion($id=null)
    {
        $reservaciones = new ReservacionesModel();
        $detalle = new DetalleReservacionModel();
        $detalle->delete($id);
        $reservaciones->delete(['reservacion_id'=>$id]);
        return redirect()->route('reservaciones');
    }
    public function buscarReservacion($id=null){
        $reservaciones = new ReservacionesModel();
        $datos['datos']=$reservaciones->where('reservacion_id',$id)->first();
        return view('form_modificar_reservacion',$datos);
    }
    public function modificarReservacion(){
        $datos=[
            'reservacion_id'=>$this->request->getVar('txtReservacionId'),
            'fecha'=>$this->request->getVar('txtFecha'),
            'cliente_id'=>$this->request->getVar('txtClienteId'),
            'hotel_id'=>$this->request->getVar('txtHotelId'),
            'descripcion'=>$this->request->getVar('txtDescripcion'),
            'usuario_id'=>$this->request->getVar('txtUsuarioId')
        ];
        $reservaciones = new ReservacionesModel();
        $reservaciones->update($datos['reservacion_id'],$datos);
        return redirect()->route('reservaciones');
    }
}