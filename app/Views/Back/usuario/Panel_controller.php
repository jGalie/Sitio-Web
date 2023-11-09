<?php

//Esta línea declara el espacio de nombres (namespace) en el que se encuentra la clase Panel_controller. //
namespace App\Controllers; 

//Se importa la clase Controller del framework CodeIgniter para que pueda ser utilizada en la definición de la clase Panel_controller.//
use CodeIgniter\Controller;


//Esto significa que la clase Panel_controller heredará todas las propiedades y métodos de la clase Controller.//
class Panel_controller extends Controller
{
    public function index() //Esta línea define un método público llamado index() dentro de la clase Panel_controller. Este método se ejecutará cuando se acceda a la URL correspondiente a este controlador.//
    {

        $session = session();//El objeto session se utiliza para almacenar y acceder a datos de sesión en CodeIgniter. 
        $nombre = $session->get('usuario');// Esta línea obtiene el valor almacenado en la variable de sesión llamada 'usuario' y lo asigna a la variable $nombre.//
        $perfil = $session->get('perfil_id');// Esta línea obtiene el valor almacenado en la variable de sesión llamada 'perfil_id' y lo asigna a la variable $perfil.

        $data['perfil_id'] = $perfil;//se crea un array y se le asigna el valor de la variable $perfil.

        $dato['titulo'] = 'Panel del usuario'; // se crea otro array y se le asigna el valor 'Panel del usuario'.
        echo view('front/head', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado', $data);
        echo view('front/footer_view');
    }
}
//este código define un controlador en CodeIgniter llamado Panel_controllerque se utiliza para mostrar una página web de panel de usuario. El controlador obtiene datos de la sesión del usuario, los almacena en variables y los pasa a vistas para su presentación en la página web.//





