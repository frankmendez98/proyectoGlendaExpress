<?php
namespace App\Controllers;
use App\Models\PaquetesModel;

class Paquetes extends BaseController {
	public function __construct()
    {
        $this->paquetes = new PaquetesModel();
    }
	public function index()
	{
		$paquetes = $this->paquetes->findAll();

		$data = array(
			"titulo"=> "Paquetes",
			"icono"=> "mdi mdi-account-group",
			
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes.js"
            ),
		);
		layout("paquetes/admin",$data,$extras);
	}
}
