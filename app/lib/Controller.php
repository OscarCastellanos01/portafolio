<?php
class Controller
{
	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';

		return new $model;
	}

	public function view($view, $datos = [])
	{
		if(file_exists('../app/views/pages/' . $view . '.php'))
		{
			require_once '../app/views/pages/' . $view . '.php';
		}
		else
		{
			die("404 NOT FOUND");
		}
	}
}