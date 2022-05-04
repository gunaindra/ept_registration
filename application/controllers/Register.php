<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
require APPPATH . 'libraries/RestController.php';
require APPPATH.'libraries/Format.php';

class Register extends RestController {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array(
			'event_model'
			)
		);
		$this->output->delete_cache();
	}
	public function index()
	{	
		$data['event'] = $this->event_model->get_list()->result();
		$this->load->view('register', $data);
	}

	public function event_get()
	{	
		$data['event'] = $this->event_model->get_list()->result();
		$this->load->view('register', $data);
		$this->response($data);
	}

	public function user_get(){
		$response['status']=200;
		$response['error']=false;
		$response['user']['username']='erthru';
		$response['user']['email']='ersaka96@gmail.com';
		$response['user']['detail']['full_name']='Suprianto D';
		$response['user']['detail']['position']='Developer';
		$response['user']['detail']['specialize']='Android,IOS,WEB,Desktop';
	//tampilkan response
		$this->response($response);
	}
}
