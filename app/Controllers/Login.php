<?php
namespace App\Controllers;
use App\Controllers\BaseController;

use CodeIgniter\Model;
use App\Models\UtilsModel;

use App\Libraries\Encryption;

class Login extends BaseController {
    public function __construct()
    {
        $this->utils = new UtilsModel();
        $this->session= \Config\Services::session();

        session();
        //$this->model = model('UsersModel');
        //$this->permissionsModel = model('PermissionsModel');
        //$this->userTypePermissionsModel = model('UserTypePermissionsModel');
    }
	public function index()
	{
        //$encrypt = new Encryption();
        //echo $encrypt->encrypt("admin$", "1234");
		
        $data = array(
			"titulo"=> "Clientes",
			"icono"=> "mdi mdi-account-group",
			
		);
		$extras = array(
			'css' => array(),
			'js' => array(
			    //"js/scripts/clientes.js"
            ),
		);
		echo view("login");
	}
    public function login(){
        $encrypt = new Encryption();

        $usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');

        $usuarioBase = "";
        $passwordBase = "";

        $usuarioRow = $this->utils->get_encabezado("usuario", array("usuario"=> $usuario));
        if(!is_null($usuarioRow)){
            $usuarioBase = $usuarioRow->usuario;
            $passwordBase = $encrypt->decrypt($usuarioRow->password, "1234");
        }
        //var_dump($usuarioRow);
        
        if($usuario == $usuarioBase && $password == $passwordBase){
            $user_session = array(
                'id_usuario'=>$usuarioRow->id,
                'usuario'  => $usuarioRow->usuario,
                'logged_in' => TRUE
            );
            session()->set($user_session);

            $xdatos["type"]="success";
			$xdatos['title']='Información';
			$xdatos["msg"]="Bienvenido!";
        }
        else{
            $xdatos["type"]="error";
			$xdatos['title']='Alerta';
			$xdatos["msg"]="Error al inciar sesion";
        }
        echo json_encode($xdatos);
        //$prueba =  $encrypter->encrypt("hola");
        
        //echo $encrypter->decrypt($prueba);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->route("login");
    }
}
