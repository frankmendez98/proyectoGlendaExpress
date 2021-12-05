<?php
namespace App\Controllers;
use App\Models\PaquetesModel;
use App\Models\CategoriasModel;

class Paquetes extends BaseController {
	public function __construct()
    {
        $this->paquetes = new PaquetesModel();
		$this->categorias = new CategoriasModel();
    }
	public function index()
	{
		if(isset(session()->id_usuario)){
		}
		else{
			return redirect()->to('login'); 

		}
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
		$categorias = $this->categorias->findAll();
		$data = array(
			"categorias" => $categorias,
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
	function show($id){
		$encabezado = $this->paquetes->find($id);
		$categorias = $this->categorias->findAll();

		$data = array(
			"encabezado" => $encabezado,
			"categorias" => $categorias,
            "titulo"=> "Paquetes",
			"icono"=> "mdi mdi-format-list-bulleted",
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes.js"
            ),
		);
		layout("paquetes/editar",$data,$extras);
	}
	function update(){
		$form = $this->request->getPost();
		if($this->paquetes->save($form)){
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
		if ($this->paquetes->delete($id)) {
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
