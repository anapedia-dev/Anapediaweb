<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pencarian/pencarian_m','pm');
	}

	public function index()
	{
		$input = $_POST['judul'];
		$lev = $this->cari($input);
		$data['word'] = $lev;
		$data['words'] = $this->pm->getBeberapaJudul($lev);
		$data['warning'] = true;
		if($lev==$input){
			$this->session->unset_userdata('data');
			$this->load->view('Pencarian/hasil', $data);
		}
		else {
			$this->session->set_tempdata('data',$data);
			redirect('welcome');
		}
	}

	public function cariKata($word){
		$this->session->unset_userdata('data');
		$data['words'] = $this->pm->getBeberapaJudul($word);
		$this->load->view('Pencarian/hasil', $data);
	}


	public function cari($input){
		$words = $this->pm->getSemuaJudul();
		
		// no shortest distance found, yet
		$shortest = -1;
		$closest = "not found";

// loop through words to find the closest
		foreach ($words as $word) {

    // calculate the distance between the input word,
    // and the current word
			$lev = levenshtein($input, $word['istilah']);

    // check for an exact match
			if ($lev == 0) {

        // closest word is this one (exact match)
				$closest = $word['istilah'];
				$shortest = 0;

        // break out of the loop; we've found an exact match
				break;
			}

    // if this distance is less than the next found shortest
    // distance, OR if a next shortest word has not yet been found
			if ($lev <= $shortest || $shortest < 0) {
        // set the closest match, and shortest distance
				$closest  = $word['istilah'];
				$shortest = $lev;
			}
		}

		return $closest;
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */