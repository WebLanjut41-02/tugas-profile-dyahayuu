<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index($nama = ''){
		$dat['judul'] = 'Halaman Home';
		$dat['nama'] = $nama;
		$this->load->view('template/header', $dat);
		$this->load->view('home/index', $dat);
		$this->load->view('template/footer');
	}
}
?>