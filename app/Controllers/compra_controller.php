<?php

namespace App\Controllers;

use App\Models\producto_Model;
use CodeIgniter\Controller;

class compra_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'Compra';
        echo view('front/head', $data);
        echo view('front/navbar_view');
        echo view('front/compra');
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'categoria' => 'required|min_length[3]|max_length[25]',
            'marca' => 'required|min_length[4]|max_length[10]',
            
        ]);

        $formModel = new producto_Model();

        if (!$input) {
            $data['titulo'] = 'Compra';
            echo view('front/head', $data);
            echo view('front/navbar_view');
            echo view('front/compra', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'categoria' => $this->request->getVar('categoria'),
                'marca' => $this->request->getVar('marca'),
            ]);

            session()->setFlashdata('success', 'Compra registrada con éxito');
            return redirect()->to('/login');
        }
    }
}