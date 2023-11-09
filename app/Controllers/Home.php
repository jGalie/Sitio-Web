<?php


//¿QUE HACE ESTE CODIGO?:
/*Define una clase llamada Home que hereda propiedades y métodos de la clase base BaseController. Los métodos públicos (INDEX) dentro de esta clase se ejecutarán cuando se acceda a las URLs correspondientes a cada uno de ellos, y mostrarán en pantalla diferentes archivos de vista utilizando la función view().*/

namespace App\Controllers;


// la clase Home heredará todas las propiedades y métodos de la clase BaseController.//
class Home extends BaseController
{
 public function index()
 {
       $data['titulo']='pagina principal';
       echo view ('front/head',$data);
    	echo view ('front/navbar_view');
    	echo view ('front/principal_ultimo');
    	echo view ('front/footer_view');

}
 public function quienes_somos()
 {
       $data['titulo']='quienes somos';
       echo view ('front/head',$data);
    	echo view ('front/navbar_view');
    	echo view ('front/quienes_somos');
    	echo view ('front/footer_view');
 }
 public function acerca_de()
 {
       $data['titulo']='acerca de';
       echo view ('front/head',$data);
    	echo view ('front/navbar_view');
    	echo view ('front/acerca_de');
    	echo view ('front/footer_view');
 }

 public function catalogo()
 {
       $data['titulo']='catalogo';
       echo view ('front/head',$data);
      echo view ('front/navbar_view');
      echo view ('front/catalogo');
      echo view ('front/footer_view');

}

 public function compra()
 {
       $data['titulo']='compra';
       echo view ('front/head',$data);
      echo view ('front/navbar_view');
      echo view ('front/compra');
      echo view ('front/footer_view');

}



public function registro()
 {
       $data['titulo']='registro';
       echo view ('front/head',$data);
    	echo view ('front/navbar_view');
    	echo view ('Back/usuario/registro');
    	echo view ('front/footer_view');
 }
public function login()
 {
       $data['titulo']='login';
       echo view ('front/head',$data);
    	echo view ('front/navbar_view');
    	echo view ('Back/usuario/login');
    	echo view ('front/footer_view');
}
}