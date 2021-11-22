<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Usuario;

class UsuariosModel extends Model
{
  protected $table = 'usuario';
  protected $primaryKey = 'id';
  protected $returnType = Usuario::class; 
  protected $useSoftDeletes = true; 
  protected $allowedFields = ['id', 
                              'created_by',
                              'updated_by',
                              'deleted_by',]; 
  protected $useTimestamps = true; 
  protected $createdField = 'created_at'; 
  protected $updatedField = 'updated_at'; 
  protected $deletedField = 'deleted_at'; 

  protected $validationRules = []; 
  protected $validationMessages = []; 
  protected $skipValidation = false; 
}