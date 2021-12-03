<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Seguimiento;

class SeguimientosModel extends Model
{
  protected $table = 'seguimiento';
  protected $primaryKey = 'id';
  protected $returnType = Seguimiento::class; 
  protected $useSoftDeletes = true; 
  protected $allowedFields = ['id', 'id_orden', 'tipo', 'id_estado', 'observacion', 'fecha', 'hora', 'created_at', 'updated_at', 'deleted_at']; 
  protected $useTimestamps = true; 
  protected $createdField = 'created_at'; 
  protected $updatedField = 'updated_at'; 
  protected $deletedField = 'deleted_at'; 

  protected $validationRules = []; 
  protected $validationMessages = []; 
  protected $skipValidation = false; 

  /*
  public function getEntity($identity) { 
    return $this->where("identity=". $identity)->find(); 
  } 

  public function getLast($limit) { 
    return $this->orderBy("identity",'DESC')->limit(0, $limit)->find(); 
  }

	function total_rows(){
		$clients = $this->db->get($this->table);
		if ($clients->num_rows() > 0) {
			return $clients->num_rows();
		} else {
			return NULL;
		}
	}
  */
}