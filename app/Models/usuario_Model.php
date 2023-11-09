<?php

/*Esta clase está diseñada para interactuar con una tabla llamada 'usuarios' en una base de datos, utilizando 'id_usuario' como clave primaria y permitiendo insertar o actualizar los campos 'nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', y 'created_at'.*/
namespace App\Models;
use CodeIgniter\Model;

class Usuario_Model extends Model
{
	protected $table = 'usuarios'; //Esta propiedad indica el nombre de la tabla en la base de datos que está asociada a esta clase.//

	protected $primaryKey = 'id_usuario'; //Esta propiedad indica el nombre de la columna en la tabla de la base de datos que se utiliza como clave primaria.//

	protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at']; //le asigna u
}