<?php namespace App\Models;
	use CodeIgniter\Model;

	class MueblesModel extends Model {
		public function muestraMuebles() {
			$muebles  = $this->db->query('SELECT * FROM t_muebles');
			return $muebles->getResult();
		}
	}