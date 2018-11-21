<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($pages = 'welcome_message')
	{
		if(!file_exists(APPPATH.'views/pages/'.$pages.'.php')) {
			show_404();
		}

		$this->load->helper('form');
		$this->load->model('bacod_model');
		$this->load->view('templates/header');
		$this->load->view('pages/'.$pages);
		$this->load->view('templates/footer');
	}
}
