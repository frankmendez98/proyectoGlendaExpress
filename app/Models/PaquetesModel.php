<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Paquete;

class PaquetesModel extends Model
{
  protected $table = 'paquetes';
  protected $primaryKey = 'id';
  protected $returnType = Paquete::class; 
  protected $useSoftDeletes = true; 
  protected $allowedFields = ['id', 
                              'nombre', 
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