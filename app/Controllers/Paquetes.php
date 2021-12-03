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
			"paquetes" => $paquetes,
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
	function create(){
		$data = array(
            "titulo"=> "Paquetes",
			"icono"=> "mdi mdi-format-list-bulleted",
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes.js"
            ),
		);
		layout("paquetes/agregar",$data,$extras);
	}
	function store(){
        //var_dump($this->request->getJSON());
        $form = $this->request->getPost();
        
        //var_dump($form);
        //$this->paquetes->save($form);
        if ($this->paquetes->save($form)) {
			$xdatos["type"]="success";
			$xdatos['title']='Información';
			$xdatos["msg"]="Registo ingresado correctamente!";
		}
		else{
			$xdatos["type"]="error";
			$xdatos['title']='Alerta';
			$xdatos["msg"]="Error al ingresar el registro";
		}
        echo json_encode($xdatos);
	}
}
