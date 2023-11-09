<?php

/*El controlador se encarga de la autenticación de usuarios y la gestión de sesiones de inicio de sesión.*/

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{

    public function index() 
    {
        helper(['form', 'url']); //esta linea carga los ayudantes helpers//

       $dato['titulo']='login';
       echo view ('front/head',$dato);
        echo view ('front/navbar_view');
        echo view ('back/usuario/registro');
        echo view ('front/footer_view');
}
    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        //traemos los datos del formulario//
        $email = $this->request->getVar('email'); //Esta línea obtiene el valor del parámetro 'email' enviado mediante una solicitud HTTP POST o GET.//

        $password =$this->request->getVar('pass'); //Esta línea obtiene el valor del parámetro 'pass' enviado mediante una solicitud HTTP POST o GET.//

        $data = $model->where('email', $email)->first(); //El método first() devuelve solo el primer resultado encontrado.//
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI'){
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/login_controller');
            }
            //Se verifica los datos ingresados para iniciar, si cumple la verificacion inicia la sesion//

            $varify_pass = password_verify($password, $pass);

            //p_v determina los requisitos de configuracion de la contraseña//

            if($varify_pass){
                $ses_data = [
                    'id_usuario'=> $data['id_usuario'],
                    'nombre'=> $data['nombre'],
                    'apellido'=> $data['apellido'],
                    'email'=> $data['email'],
                    'usuario'=> $data['usuario'],
                    'perfil_id'=> $data['perfil_id'],
                    'logged_in' => TRUE

                ];
                //Si se cumple la VERIFICACION inicia la sesion//
                $session->set($ses_data);

                session()->setFlashdata('msg', '¡¡Bienvenido!!');
                return redirect()->to('/panel'); //se hace uso del PANEL CONTROLLER//
                //retorna a la PAGINA PRINCIPAL si se cumple la VERIFICACION//

            }else{
                //No pasa la validacion de la password//
                $session->setFlashdata('msg', 'Password Incorrecta');
                return redirect()->to('login_controller');

            }
        }else{
            $session->setFlashdata('msg', 'No existe el Email o es Incorrecto');
            return redirect()->to('/login_controller');
        }
    } 

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}