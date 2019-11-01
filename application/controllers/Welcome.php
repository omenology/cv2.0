<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Cv_model', 'cv');

		$data['judul'] = 'Ikbal Lukmanul Hakim | WEB DEV';
		$data['profile'] = $this->cv->getProfile();
		$data['pendidikan'] = $this->cv->getPendidikan();
		$data['kemampuan'] = $this->cv->getKemampuan();
		$data['project'] = $this->cv->getProject();
		
		$this->load->view('templates/header', $data);
		$this->load->view('welcome', $data);
		$this->load->view('templates/footer');
	}
}
