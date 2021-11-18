<?php
namespace App\Controllers;

class Clientes extends BaseController {
	public function index()
	{
		$data = array(
			"titulo"=> "Clientes",
			"icono"=> "mdi mdi-account-group",
			
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/clientes.js"
            ),
		);
		layout("clientes/agregar",$data,$extras, $this);
	}
}
