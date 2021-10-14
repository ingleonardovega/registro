<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = [ 'nombre', 'a_paterno', 'a_materno', 'fecha_nacimiento', 'email', 'celular', 'password', 'status_usuario' ];

}
?>
