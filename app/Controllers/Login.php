<?php
namespace App\Controllers;

class Login extends BaseController {
    public function __construct()
    {
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
    public function logout()
    {
        session()->destroy();
        return redirect()->route("login");
    }
}
