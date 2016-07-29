<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_istilah extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function select_tabel($nama_tabel){
		return $this->db->get($nama_tabel);
	}

}

/* End of file  */
/* Location: ./application/models/ */