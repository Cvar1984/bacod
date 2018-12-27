<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        // load Session Library
        $this->load->library('session');
        // load url helper
        $this->load->helper('url');
        $this->load->helper('form');
        // load model
        $this->load->model('bacod_model');
    }

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
			),

			'username'=>array(
				'name'=>'username',
				'class'=>'form-control',
				'placeholder'=>'Username'
			),

			'email'=>array(
				'name'=>'email',
				'class'=>'form-control',
				'placeholder'=>'Email'
			),

			'password'=>array(
				'name'=>'password',
				'class'=>'form-control',
				'placeholder'=>'Password'
			)
		);
		$this->session->set_userdata('username','password');

		$data['page']['title']=$pages;
		$data['form']['message']=form_textarea($data['form']['data']['message']);
		$data['form']['button']=form_submit($data['form']['data']['button']);
		$data['form']['username']=form_input($data['form']['data']['username']);
		$data['form']['email']=form_input($data['form']['data']['email']);
		$data['form']['password']=form_password($data['form']['data']['password']);
		
		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$pages);
		$this->load->view('templates/footer');
	}
}
