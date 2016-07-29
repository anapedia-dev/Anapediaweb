<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian_m extends CI_Model {

	public function getSemuaJudul(){
		$this->db->select('istilah');
		$data = $this->db->get('istilah');
		return $data->result_array();
	}

	public function getBeberapaJudul($keyword){
		$this->db->select('istilah,definisi');
		$this->db->where('istilah', $keyword);
		$data = $this->db->get('istilah');
		return $data->result_array();	
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */