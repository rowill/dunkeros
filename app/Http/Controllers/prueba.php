<?php namespace Basquet\Http\Controllers;

class prueba extends Controller {

 
	public function index()
	{
		return "hola desde controller ";
	}
	public function nombre($nombre)
	{
		return "hola mi nombre es : ".$nombre;
	}

}
