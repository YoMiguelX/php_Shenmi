<?php
namespace App\Controllers;
use App\Models\UsuarioModel;
class Login extends BaseController
{
    public function index()
    {
        return view('paginas/login');
    }
  public function acceder()
  {
    $usuario = $this->request->getPost('nombre_usu');
    $password = $this->request->getPost('password');

    $model = new UsuarioModel();
    $datosUsuario = $model->verificarUsuario($usuario, $password);


    if($datosUsuario)
    {
        //guardar datos en sesion
       session()->set('usuario', $datosUsuario['nombre_usu']);
       session()->set('perfil', $datosUsuario['id_perfil']);
       //redireccionar a la pagina por perfil
       switch ($datosUsuario['id_perfil']){
       case 1:
        return redirect()->to('/empleados');
        case 2:
            return redirect()->to('/secretaria');
        case 3:
            return redirect()->to('/vendedor');
        default:
                return redirect()->to('/login');
       }

    }else
    {
        return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
    }

  }
  public function salir()
  {
      session()->destroy();
      return redirect()->to('/login');
  }
}

?>