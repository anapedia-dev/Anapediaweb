<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['warning'] = false;
		if(isset($_SESSION['data'])){
			$data = $_SESSION['data'];
		}
		$this->load->view('home2',$data);
	}


}
