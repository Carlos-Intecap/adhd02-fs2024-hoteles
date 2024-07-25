<?php

namespace App\Controllers;
use App\Models\ClientesModel;
class ClientesController extends BaseController
{
    public function index(): string
    {
        $cliente = new ClientesModel();
        $datos['datos']=$cliente->findAll();
        return view('clientes',$datos);
    }
    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }
    
    public function agregarCliente()
    {
        $datos=[
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nit' => $this->request->getVar('txtNit'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'contrasenia' => $this->request->getVar('txtContra')
        ];
        //print_r($datos);
        $clientes = new ClientesModel();
        $clientes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('clientes');
    }
    public function eliminarCliente($id=null)
    {
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$id]);
        return redirect()->route('clientes');
    }
    public function buscarCliente($id=null){
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        return view('form_modificar_cliente',$datos);
    }
    public function modificarCliente(){
        $datos=[
            'cliente_id'=>$this->request->getVar('txtClienteId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nit'=>$this->request->getVar('txtNit'),
            'telefono'=>$this->request->getVar('txtTelefono'),
            'correo_electronico'=>$this->request->getVar('txtCorreo'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'contrasenia'=>$this->request->getVar('txtContra')
        ];
        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'],$datos);
        return redirect()->route('clientes');
    }
}