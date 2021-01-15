<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$this->load->view('templates_frontend/head');
		$this->load->view('templates_frontend/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('templates_frontend/foot');
	}
}
