<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use CodeIgniter\Model;
use App\Models\ClientesModel;
use App\Models\Paquetes_onlineModel;
use App\Models\SeguimientosEstadosModel;
use App\Models\UtilsModel;
use CodeIgniter\RESTful\ResourceController;

class ApiTienda extends ResourceController {
	protected $helpers = ["layout"];

    public function __construct()
    {

        $this->clientes = new ClientesModel();
		$this->paquetes_online = new Paquetes_onlineModel();
		$this->seguimiento_estados = new SeguimientosEstadosModel();
		$this->utils = new UtilsModel();
    }

	public function index()
	{
		$clientes = $this->clientes->findAll();
		$paquetesOnline = $this->paquetes_online->findAll();

		foreach ($paquetesOnline as $keyP => $arrPaquete) {
			# code...
			$seguimientoEstados = $this->seguimiento_estados->findAll();
			$estadoActual = "";

			foreach ($seguimientoEstados as $key => $arrSeguimiento) {
				# code...
				//Procedemos a validar si el estado se encuentra asociado a la orden
				$validarEstado = $this->utils->exist_where("seguimiento", array("id_orden" => $arrPaquete->id, "id_estado" => $arrSeguimiento->id));
				//echo $arrSeguimiento->id;
				if($validarEstado){
					$seguimientoEstados[$key]->estado_activo = 1;
					$estadoActual = $arrSeguimiento->nombre;//Sobreescribimos hasta encontrar el ultimo estado que ha sido asignado a la orden
				}
				else{
					$seguimientoEstados[$key]->estado_activo = 0;
				}
			}
			$paquetesOnline[$keyP]->seguimiento_estados = $seguimientoEstados;//Almacenamos el objeto seguimiento modificado
			$paquetesOnline[$keyP]->estado_actual = $estadoActual;//Almacenamos el estado final que posee la orden
		}
		//dd($clientes);
		//var_dump($clientes);
		
		$data = array(
            "titulo"=> "Paquetes",
			"icono"=> "mdi mdi-format-list-bulleted",
			"clientes" => $clientes,
			"paquetes_online" => $paquetesOnline,
			"seguimiento_estados" => $seguimientoEstados,
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    "js/scripts/paquetes_online.js"
            ),
		);
		layout_api("tienda/dashboard",$data,$extras);
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
