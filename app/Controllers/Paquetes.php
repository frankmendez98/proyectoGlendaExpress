<?php
namespace App\Controllers;

class Paquetes extends BaseController {
	public function __construct()
    {
        $this->paquetes = new PaquetesModel();
    }
	public function index()
	{
		$data = array(
			"titulo"=> "Clientes",
			"icono"=> "mdi mdi-account-group",
			
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    //"js/scripts/clientes.js"
            ),
		);
		layout("paquetes/agregar",$data,$extras, $this);
	}
}
