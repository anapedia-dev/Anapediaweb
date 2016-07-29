<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

  public function getlogin($user,$pass){
    //$kode = md5($pass);
    $this->db->where('username',$user);
    $this->db->where ('password',md5($pass));
    $query = $this->db->get('admin');
    if ($query->num_rows()>0) {
      foreach ($query->result() as $row) {
        $sess = array(
          'username'  => $row->username
          );
        $this->session->set_userdata($sess);
        redirect('Admin/c_login/dashboard');
      }
    }
    else{
      $this->session->set_flashdata('info','maaf username atau password salah!!');
      redirect('Admin/c_login');
    }
  }
  public function cek_login() {
    if($this->CI->session->userdata('username') == '') {
      $this->CI->session->set_flashdata('sukses','Anda belum login');
      redirect('Admin/c_login');
    }
  }
}