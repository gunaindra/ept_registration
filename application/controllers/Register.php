<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
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

	public function register($id_event=null){
		$data['id_event'] = $id_event;
		$data['event'] = $this->event_model->get(array('id_event'=>$id))->row();
		$this->load->view('register', $data);
	}
}
