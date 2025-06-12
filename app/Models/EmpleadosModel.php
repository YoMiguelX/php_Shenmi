<?php 
namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ced_empleado', 'nombre_emp','apellido_emp','email_emp','direccion_emp','telefono_emp'];
    protected $timestamps = false ;


}
?>