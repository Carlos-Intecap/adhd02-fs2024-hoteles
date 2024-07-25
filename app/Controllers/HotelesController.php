<?php

namespace App\Controllers;
use App\Models\HotelesModel;
class HotelesController extends BaseController
{
    public function index(): string
    {
        $hotel = new HotelesModel();
        $datos['datos']=$hotel->findAll();
        return view('hoteles',$datos);
    }
    public function nuevoHotel(): string
    {
        return view('hoteles_nuevos');
    }
    
    public function agregarHotel()
    {
        $datos=[
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtCorreo'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadId'),
            'categoria_id' => $this->request->getVar('txtCategoriaId'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        $hoteles = new HotelesModel();
        $hoteles->insert($datos);
        echo "Datos guardados";
        return redirect()->route('hoteles');
    }
    public function eliminarHotel($id=null){
        $hoteles = new HotelesModel();
        $hoteles->delete(['hotel_id'=>$id]);
        return redirect()->route('hoteles');
    }
    public function buscarHotel($id=null){
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->where('hotel_id',$id)->first();
        return view('form_modificar_hotel',$datos);
    }
    public function modificarHotel(){
        $datos=[
            'hotel_id'=>$this->request->getVar('txtHotelId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'correoelectronico'=>$this->request->getVar('txtCorreo'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'ciudad_id'=>$this->request->getVar('txtCiudadId'),
            'categoria_id'=>$this->request->getVar('txtCategoriaId'),
            'usuario_id'=>$this->request->getVar('txtUsuarioId')
        ];
        $hoteles = new HotelesModel();
        $hoteles->update($datos['hotel_id'],$datos);
        return redirect()->route('hoteles');
    }
}