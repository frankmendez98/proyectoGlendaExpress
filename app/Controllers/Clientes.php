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
		if(isset(session()->id_usuario)){
		}
		else{
			return redirect()->to('login'); 

		}
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
            "titulo"=> "Clientes",
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
	function show($id){
		$encabezado = $this->clientes->find($id);
		$data = array(
			"encabezado" => $encabezado,
            "titulo"=> "Clientes",
			"icono"=> "mdi mdi-format-list-bulleted",
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/clientes.js"
            ),
		);
		layout("clientes/editar",$data,$extras);
	}
	function update(){
		$form = $this->request->getPost();
		if($this->clientes->save($form)){
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
	function destroy(){
		$id = $this->request->getPost('id');
		//echo $id;
		if ($this->clientes->delete($id)) {
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
