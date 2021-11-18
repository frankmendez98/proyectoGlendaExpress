<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use CodeIgniter\Model;
use App\Models\ClientesModel;


class Clientes extends BaseController {
    public function __construct()
    {
        $this->clientes = new ClientesModel();
    }

	public function index()
	{
		$clientes = $this->clientes->findAll();
		//dd($clientes);
		//var_dump($clientes);
		
		$data = array(
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
			"clientes" => $clientes,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/clientes.js"
            ),
		);
		layout("clientes/admin",$data,$extras);
	}
	function create(){
		$data = array(
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/clientes.js"
            ),
		);
		layout("clientes/agregar",$data,$extras);
	}
	function store(){
		$form = [
            'nombre' => $this->request->getPost('nombre'),
			'direccion' => $this->request->getPost('direccion'),
			'telefono' => $this->request->getPost('telefono'),
        ];

		if ($this->clientes->save($form)) {
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
