<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Paquete_online extends Entity
{
    protected $db;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected function getUsuario(){
        //echo $this->attributes['id_usuario'];
        if (!empty($this->attributes['id_usuario'])) {
            $usuario = model("UsuariosModel");
            //dd($userTypesModel);
            //var_dump($userTypesModel);

            return $usuario
                ->find($this->attributes['id_usuario']);
        }
        return $this;
    }
}


?>