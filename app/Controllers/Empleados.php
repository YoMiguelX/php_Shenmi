<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmpleadosModel;

class Empleados extends BaseController
{
public function index()
{
    $model = new EmpleadosModel();
    $data['empleados'] = $model->findAll();
return view('empleados/index',$data);
}
public function crear()
{
    return view('empleados/nuevo');
}


public function guardar()
{
$model = new EmpleadosModel();
$model->insert($this->request->getPost());
return redirect()->to('/empleados');

}
public function editar($id)
{
    $model = new EmpleadosModel();
    $data['empleado'] = $model->find($id);
    return view('empleados/editar');


}
public function actualizar($id)
{
    $model = new EmpleadosModel();
    $model->update($id,$this->request->getPost());
    return redirect()->to('/empleados');    
}
public function eliminar($id)
{
    $model = new EmpleadosModel();
    $model->delete($id);
    return redirect()->to('/empleados');
}
}
?>