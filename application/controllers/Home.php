<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['projects'] = $this->mAdmin->ambilData();

		$this->load->view('user/header');
		$this->load->view('user/home', $data);
		$this->load->view('user/footer');
	}

	public function projects()
	{
		$data['projects'] = $this->mAdmin->ambilData();

		$this->load->view('user/header');
		$this->load->view('user/projects', $data);
		$this->load->view('user/footer');
	}

	public function about()
	{
		$this->load->view('user/header');
		$this->load->view('user/about');
		$this->load->view('user/footer');
	}
}
