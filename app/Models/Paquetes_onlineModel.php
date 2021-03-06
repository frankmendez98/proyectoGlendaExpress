<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Paquete_online;

class Paquetes_onlineModel extends Model
{
  protected $table = 'ordenes_online';
  protected $primaryKey = 'id';
  protected $returnType = Paquete_online::class; 
  protected $useSoftDeletes = true; 
  protected $allowedFields = ['id', 
                              'id_usuario',
                              'numero_seguimiento', 
                              'total_facturar', 
                              'fecha_entrega', 
                              'descripcion', 
                              'cantidad', 
                              'precio_pedido', 
                              'estado',
                              'eliminado',  
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

  public function paquetes($id_usuario){
    $result = $this->db->table('ordenes_online as oo')->select('oo.*')
        ->where('id_usuario', $id_usuario)
        ->get()->getResult();
    return $result;
    //var_dump($result);
}
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