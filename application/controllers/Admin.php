<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		$this->load->model('Cv_model', 'cv');
	}

	public function index(){
		
	}
}