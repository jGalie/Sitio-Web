<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
{
	// si el usuario NO ESTA LOGUEADO//
	if(!session()->get('logged_in')){
		//SI NO ESTA LOGUEADO REDIRECCIONA A LA PAGINA DE LOGIN PAGE//
		return redirect()->to('/login');
	}
}

public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
	
}
}