<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class portofolio extends CI_Controller {
	public function index(){
		$dat['judul'] = 'Portofolio';
		$this->load->view('template/header', $dat);
		$this->load->view('portofolio/index', $dat);
		$this->load->view('template/footer');
	}
}
?>