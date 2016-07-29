<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/model_login');
		$this->load->model('Admin/model_istilah');

		

		


	}

	public function index()
	{
		$this->load->view('Admin/login');
	}
	public function getlogin(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->model_login->getlogin($user,$pass);
	}

	public function dashboard(){
		if($this->session->userdata('username') == '') {
			$this->session->set_flashdata('sukses','Anda belum login');
			redirect('Admin/c_login');
		}else{

			$operator = $this->model_istilah->select_tabel("istilah")->result_array();

			$this->load->view('Admin/tempDashboard', array("data" => $operator));
		}
		
	}

	public function Logout(){

		$this->session->unset_userdata('sess');
		$this->session->sess_destroy();
		redirect('Admin/c_login');


	}

}