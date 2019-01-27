<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class foto extends CI_Controller {
	public function index(){
		$dat['judul']='Foto';
		$this->load->view('template/header',$dat);
		$this->load->view('foto/index',$dat);
		$this->load->view('template/footer');
	}
}