<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Cliente extends Entity
{
    protected $db;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}


?>