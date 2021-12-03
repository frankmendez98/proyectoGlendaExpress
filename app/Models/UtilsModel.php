<?php namespace App\Models;

use CodeIgniter\Model;

class UtilsModel extends Model
{
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