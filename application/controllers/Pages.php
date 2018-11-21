<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($pages = 'welcome_message')
	{
		if(!file_exists(APPPATH.'views/pages/'.$pages.'.php')) {
			show_404();
		}
		$data['form']['data']=array(
			'message'=>array(
				'name'=>'message',
				'class'=>'form-control',
				'placeholder'=>'message'
			),

			'button'=>array(
				'name'=>'action',
				'class'=>'btn btn-default btn-lg',
				'value'=>'Bacod!'
			)
		);

		$this->load->helper('form');
		$data['form']['message']=form_textarea($data['form']['data']['message']);
		$data['form']['button']=form_submit($data['form']['data']['button']);
		$this->load->model('bacod_model');
		$this->load->view('templates/header');
		$this->load->view('pages/'.$pages, $data);
		$this->load->view('templates/footer');
	}
}
