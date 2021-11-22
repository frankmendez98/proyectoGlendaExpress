<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use CodeIgniter\Model;
use App\Models\Paquetes_onlineModel;


class Paquetes_online extends BaseController {
    public function __construct()
    {
        $this->paquetes = new Paquetes_onlineModel();
    }

	public function index()
	{
		$paquetes = $this->paquetes->findAll();
		//dd($clientes);
		//var_dump($clientes);
		
		$data = array(
			"titulo"=> "Admin Ordenes Online",
			"icono"=> "mdi mdi-format-list-bulleted",
			"buttons" => array(
				0 => array(
					"icon"=> "fa fa-plus",
					'url' => 'movimientos/agregar_salida',
					'txt' => 'Agregar Salida',
					'modal' => false,
				),
			),
			"table"=>array(
				"ID"=>1,
				"Concepto"=>8,
				//"Acciones"=>1,
			),
            "detalle" => $paquetes,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/funciones/paquetes_online.js"
            ),
		);
		layout("paquetes_online/admin",$data,$extras);
	}
	function create(){
		$data = array(
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes_online.js"
            ),
		);
		layout_tienda("paquetes_online/agregar",$data,$extras);
	}
	function store(){
        //var_dump($this->request->getJSON());
        $form = $this->request->getPost();
        $form['id_usuario'] = 1;
        
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
