<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Return_;

class productos extends BaseController
{
    public function index()
    {
        $dato =['titulo'=>'CATALOGO'
        , 'valor'=> '<a href="#">descargar pdf listados</a>'];
       
        $bd = \Config\Database::connect();
        $query =$bd ->query("SELECT codigo_barra, nombre_prod, stock from producto");
        $resultado = $query->getResult();
        $data=['productos'=>$resultado];
    return view('productos/inventario',$data);
    }

    
    public function show(){
        return "<h2>detalles de los productos</h2>";
    }
       public function show2($id){
        return "<h2>busqueda de el producto de codigo: $id </h2>";
    }
     public function cat($cat,$id){
        return "<h2>categoria del producto $cat <br> codigo: $id </h2>";
    }
}
    
?>