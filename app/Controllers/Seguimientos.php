<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use CodeIgniter\Model;
use App\Models\SeguimientosModel;
use App\Models\SeguimientosEstadosModel;

class Seguimientos extends BaseController {
    public function __construct()
    {
        $this->seguimiento = new SeguimientosModel();
		$this->seguimiento_estados = new SeguimientosEstadosModel();
    }

	public function index()
	{
		$seguimiento = $this->seguimiento->findAll();
		//dd($clientes);
		//var_dump($clientes);
		
		$data = array(
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
			"seguimiento" => $seguimiento,
			"estados" => $estados,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/seguimiento.js"
            ),
		);
		layout("seguimiento/admin",$data,$extras);
	}
    function cargar_seguimiento(){
		$id = $this->request->getPost("id");
		$estados = $this->seguimiento_estados->findAll();

		//echo $id; 
		$data = array("id" => $id, 
					  "estados" => $estados);
        echo view('seguimiento/modal_seguimiento',$data);
    }
	/*
	function create(){
		$data = array(
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/categorias.js"
            ),
		);
		layout("categorias/agregar",$data,$extras);
	}
	function store(){
        //var_dump($this->request->getPost());
		$form = $this->request->getPost();

		if ($this->categorias->save($form)) {
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
	function destroy(){
		$id = $this->request->getPost('id');
		//echo $id;
		if ($this->categorias->delete($id)) {
			$xdatos["type"]="success";
			$xdatos['title']='Información';
			$xdatos["msg"]="Registo eliminado correctamente!";
		}
		else{
			$xdatos["type"]="error";
			$xdatos['title']='Alerta';
			$xdatos["msg"]="Error al eliminar registro";
		}
		echo json_encode($xdatos);
	}
	*/
}
