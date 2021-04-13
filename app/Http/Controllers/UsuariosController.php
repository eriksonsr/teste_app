<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
	public function ListarJson()
	{
		return json_encode(Usuarios::orderBy('nome')->get());
	}
}
