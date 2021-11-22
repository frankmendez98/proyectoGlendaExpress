<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Cliente;

class Paquetes_onlineModel extends Model
{
  protected $table = 'ordenes_online';
  protected $primaryKey = 'id';
  protected $returnType = Cliente::class; 
  protected $useSoftDeletes = true; 
  protected $allowedFields = ['id', 
                              'id_usuario',
                              'numero_seguimiento', 
                              'fecha_entrega', 
                              'descripcion', 
                              'cantidad', 
                              'precio_pedido', 
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