<?php
namespace App\Controllers;

class Login extends BaseController {
    public function __construct()
    {
        $this->utils = new UtilsModel();

        session();
        //$this->model = model('UsersModel');
        //$this->permissionsModel = model('PermissionsModel');
        //$this->userTypePermissionsModel = model('UserTypePermissionsModel');
    }
	public function index()
	{
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
        $encrypter = \Config\Services::encrypter();

        $usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');

        $passwordEncrypt = $encrypter->encrypt($password);
        

        //$prueba =  $encrypter->encrypt("hola");
        
        //echo $encrypter->decrypt($prueba);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->route("login");
    }
}
