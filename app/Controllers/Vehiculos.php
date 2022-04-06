<?php 
namespace App\Controllers;
use App\Models\Vehiculo;
use CodeIgniter\Controller;

class Vehiculos extends Controller{

    public function cargarVehiculos(){
        //instanciar la clase Vehiculo (Models con conexion a la tabla de la base de datos)
        $vehiculo = new Vehiculo();
        //recibir el resultado del select en un array
        $datos['misVehiculos']=$vehiculo->orderBy('cod_vehiculo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('vehiculos/lista_vehiculo', $datos);
    }

    public function eliminarVehiculo($codigo=null){
        
        //instanciar la clase Vehiculo (modelo = conexion a la tabla)
        $vehiculo = new Vehiculo();
        $vehiculo->delete($codigo);
       
        $datos['misVehiculos']=$vehiculo->orderBy('cod_vehiculo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('vehiculos/lista_vehiculo', $datos);
        
    }

    public function verFormularioNuevoVehiculo(){
        return view('vehiculos/form_nuevo_vehiculo');
    }

    public function guardarVehiculos(){
        //instanciar la clase Vehiculo (modelo = conexion con la tabla)
        $vehiculo = new Vehiculo();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtPlaca = $this->request->getVar('txtPlaca');
        $txtMarca = $this->request->getVar('txtMarca');
        $txtModelo = $this->request->getVar('txtModelo');
        $txtFecha = $this->request->getVar('txtFecha');
        //trasladar esos valores a la base de datos
        $datos=[
            'cod_vehiculo'=>$txtCodigo,
            'placa'=>$txtPlaca,
            'marca'=>$txtMarca,
            'modelo'=>$txtModelo,
            'fecha_fabricacion'=>$txtFecha
        ];
        $vehiculo->insert($datos);

        //cargar la lista
        $datos['misVehiculos']=$vehiculo->orderBy('cod_vehiculo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('vehiculos/lista_vehiculo', $datos);
    }

    public function frmModificarVehiculo($codigo=null){
    
        $vehiculo = new Vehiculo();
        $datos['vehiculo']=$vehiculo->where('cod_vehiculo',$codigo)->first();
        return view('vehiculos/form_modificar_vehiculo',$datos);
    }
    public function modificarVehiculo(){
        //instanciar la clase Vehiculo (modelo = conexion con la tabla)
        $vehiculo = new Vehiculo();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtPlaca = $this->request->getVar('txtPlaca');
        $txtMarca = $this->request->getVar('txtMarca');
        $txtModelo = $this->request->getVar('txtModelo');
        $txtFecha = $this->request->getVar('txtFecha');
        //trasladar esos valores a la base de datos
        $datos=[
            'cod_vehiculo'=>$txtCodigo,
            'placa'=>$txtPlaca,
            'marca'=>$txtMarca,
            'modelo'=>$txtModelo,
            'fecha_fabricacion'=>$txtFecha
        ];
        $vehiculo->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misVehiculos']=$vehiculo->orderBy('cod_vehiculo','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('vehiculos/lista_vehiculo', $datos);
    }

}