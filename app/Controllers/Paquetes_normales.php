<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use CodeIgniter\Model;
use App\Models\Paquetes_normalesModel;
use App\Models\PaquetesModel;
use App\Models\ClientesModel;
use App\Models\UtilsModel;

class Paquetes_normales extends BaseController {
    public function __construct()
    {
        $this->utils = new UtilsModel();

        $this->paquetes_normales = new Paquetes_normalesModel();
        $this->clientes = new ClientesModel();
        $this->paquetes = new PaquetesModel();
    }

	public function index()
	{
		if(isset(session()->id_usuario)){
		}
		else{
			return redirect()->to('login'); 

		}
		$paquetes = $this->paquetes_normales->findAll();
		//dd($clientes);
		//var_dump($clientes);
		
		$data = array(
			"titulo"=> "Admin Ordenes",
			"icono"=> "mdi mdi-format-list-bulleted",
            "detalle" => $paquetes,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes_normales.js"
            ),
		);
		layout("paquetes_normales/admin",$data,$extras);
	}
	function create(){
        $paquetes = $this->paquetes->findAll();
        $clientes = $this->clientes->findAll();
		$data = array(
            "titulo"=> "Categorias",
			"icono"=> "mdi mdi-format-list-bulleted",
            "clientes" => $clientes,
            "paquetes" => $paquetes,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes_normales.js"
            ),
		);
		layout("paquetes_normales/agregar",$data,$extras);
	}
	function store(){
        //var_dump($this->request->getJSON());
        $form = ["id_usuario" => 1,
                      "id_cliente" => $this->request->getPost("id_cliente"),
                      "precio_pedido" => $this->request->getPost("total"),
					  "envia" => $this->request->getPost("envia"),
					  "recibe" => $this->request->getPost("recibe"),
					  "direccion_entrega" => $this->request->getPost("direccion_entrega"),
					  "numero_seguimiento" => uniqid(),
                      "fecha" => date("Y-m-d"),
                      "hora" => date("H:i:s"),
    	];

        //var_dump($form);
        //$this->paquetes->save($form);
        if ($this->paquetes_normales->save($form)) {
            $datos = json_decode($this->request->getVar("datosForm"));

            $idOrden=$this->paquetes_normales->getInsertID();

            foreach ($datos as $arrDatos) {
                # code...
                $idProducto = $arrDatos->id_producto;
                $peso = $arrDatos->peso;
                $pesoDolares = $arrDatos->peso_dolares;
                $subtotal = $arrDatos->subtotal;
                
                $form = array("id_orden" => $idOrden,
                              "id_producto" => $idProducto,
							  "precio" => $pesoDolares,
                              "cantidad" => 1,
                              "peso" => $peso,
							  "subtotal" => $subtotal,);
                $update = $this->utils->_insert("ordenes_detalle", $form);
            }

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
	function show($id = 0){
		//$id = $this->request->uri->getSegment(3);
		//echo $id;
		$encabezado = $this->paquetes->find($id);
		
		//dd($encabezado->usuario);
		$data = array(
            "titulo"=> "Paquetes",
			"icono"=> "mdi mdi-format-list-bulleted",
			"encabezado" => $encabezado,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes_online.js"
            ),
		);
		layout("paquetes_online/ver_orden",$data,$extras);
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
