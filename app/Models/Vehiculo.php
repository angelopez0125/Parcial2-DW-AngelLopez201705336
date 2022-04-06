<?php 
namespace App\Models;

use CodeIgniter\Model;

class Vehiculo extends Model{
    protected $table      = 'vehiculos';
    protected $primaryKey = 'cod_vehiculo';
    protected $allowedFields =['cod_vehiculo','placa','marca','modelo','fecha_fabricacion'];
}