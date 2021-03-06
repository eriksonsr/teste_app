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

	public function Cadastrar(Request $request)
	{
		$dados = [
			'nome' => $request->input('nome'),
			'email' => $request->input('email'),
			'senha' => $request->input('senha'),
			'telefone' => $request->input('telefone')
		];

		$usuario = new Usuarios();
		$usuario->nome = $request->input('nome');
		$usuario->email = $request->input('email');
		$usuario->senha = $request->input('senha');
		$usuario->telefone = $request->input('telefone');

		try {
			$usuario->save();
			return json_encode(['status' => 'Sucesso', 'msg' => 'Usuário cadastrado com sucesso!']);
		} catch (Exception $e) {
			return json_encode(['status' => 'Erro', 'msg' => 'Ocorreu um erro ao cadastrar usuário.']);
		}
	}	

	public function Excluir($id)
	{
		try {
			Usuarios::find($id)->delete();
			return json_encode(['status' => 'Sucesso', 'msg' => 'Usuário excluído com sucesso!']);
		} catch (Exception $e) {
			return json_encode(['status' => 'Erro', 'msg' => 'Ocorreu um erro ao excluir usuário.']);
		}
	}

	public function Listar()
	{
		return view("usuarios.listar");
	}
}
