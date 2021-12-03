<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use CodeIgniter\Model;
use App\Models\CategoriasModel;


class Categorias extends BaseController {
    public function __construct()
    {
        $this->categorias = new CategoriasModel();
    }

	public function index()
	{
		$categorias = $this->categorias->findAll();
		//dd($clientes);
		//var_dump($clientes);
		
		$data = array(
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
			"categorias" => $categorias,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/categorias.js"
            ),
		);
		layout("categorias/admin",$data,$extras);
	}
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
	function show($id){
		$encabezado = $this->categorias->find($id);
		$data = array(
			"encabezado" => $encabezado,
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/categorias.js"
            ),
		);
		layout("categorias/editar",$data,$extras);
	}
	function update(){
		$form = $this->request->getPost();
		if($this->categorias->save($form)){
			$xdatos["type"]="success";
			$xdatos['title']='Información';
			$xdatos["msg"]="Registo actualizado correctamente!";
		}
		else{
			$xdatos["type"]="error";
			$xdatos['title']='Alerta';
			$xdatos["msg"]="Error al actualizar el registro";
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
}
