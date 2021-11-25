<?php namespace App\Models;

use CodeIgniter\Model;

class UtilsModel extends Model
{
    function get_encabezado($tabla,$where){
        foreach ($where as $key => $value) {
          // code...
          $this->db->where($key, $value);
        }
        $data = $this->db->get($tabla);
        if ($data->num_rows() > 0) {
          return $data->row();
        } else {
          return NULL;
        }
    }
    function get_detalle($tabla,$where){
        if(empty($where)){}
        else{
            foreach ($where as $key => $value) {
                if($key!='null'){
                    $this->db->where($key, $value);
                }
            }
        }
    	$detail = $this->db->get($tabla);
    	if ($detail->num_rows() > 0) {
    		return $detail->result();
    	} else {
    		return NULL;
    	}
    }
	function exist_where($tabla,$where){
        //var_dump($where);
        $data = $this->db->table($tabla)->where($where);
        if ($data->countAllResults() > 0) {
          return 1;
        } else {
          return 0;
        }
    }
}