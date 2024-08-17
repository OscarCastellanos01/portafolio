<?php
class ViewsController extends Controller
{
	public function index()
	{
		// $userModel = $this->model('UserModel');
		// $users = $userModel->getUsers();

		// $this->view('inicio', [
		// 	'title' => 'Inicio',
		// 	'users' => $users
		// ]);

		$this->view('inicio', [
			'title' => 'Portafolio - Oscar Castellanos'
		]);
	}

	public function update($id)
	{
		echo "Update view " . $id;
	}
	
	public function test()
	{
		echo "Funcion test";
	}
}