<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Cv_model', 'cv');
	}

	public function index(){
		$data['judul'] = 'Profile';
		$data['profile'] = $this->cv->getProfile();
		$data['kontak'] = $this->cv->getKontak();
		
		$this->load->view('templates/header', $data);
		$this->load->view('admin/templates/menu', $data);
		$this->load->view('admin/profile',$data);
		$this->load->view('admin/templates/stickyFooter');
		$this->load->view('templates/footer');
		$this->load->view('admin/templates/scriptAdmin');
	}

	public function experience($tipe = 'education'){
		$data['judul'] = 'Experience';
		$data['profile'] = $this->cv->getProfile();
		$data['pendidikan'] = $this->cv->getPendidikan();
		$data['tipe'] = $tipe;
		
		$this->load->view('templates/header', $data);
		$this->load->view('admin/templates/menu', $data);
		$this->load->view('admin/pendidikan',$data);
		$this->load->view('admin/templates/stickyFooter');
		$this->load->view('templates/footer');
		$this->load->view('admin/templates/scriptAdmin');
		$this->load->view('admin/templates/scriptAdminTable');
	}

	public function abilities($jenis = 'skill'){
		$data['judul'] = 'Abilities';
		$data['jenis'] = $jenis;
		$data['profile'] = $this->cv->getProfile();
		$data['kemampuan'] = $this->cv->getKemampuan();
		
		$this->load->view('templates/header', $data);
		$this->load->view('admin/templates/menu', $data);
		$this->load->view('admin/abilities',$data);
		$this->load->view('admin/templates/stickyFooter');
		$this->load->view('templates/footer');
		$this->load->view('admin/templates/scriptAdmin');
		$this->load->view('admin/templates/scriptAdminTable');
	}

	public function project(){
		$data['judul'] = 'Project';
		$data['profile'] = $this->cv->getProfile();
		$data['project'] = $this->cv->getProject();
		
		$this->load->view('templates/header', $data);
		$this->load->view('admin/templates/menu', $data);
		$this->load->view('admin/project',$data);
		$this->load->view('admin/templates/stickyFooter');
		$this->load->view('templates/footer');
		$this->load->view('admin/templates/scriptAdmin');
	}
}