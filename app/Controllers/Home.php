<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Home extends BaseController
{
  
    public function acceso()
    {
        return view('acceso');
    }

    public function guardar()
    {
        $request= \Config\Services::request();
		$usuario = new UsuarioModel($db);

        
    }
}
