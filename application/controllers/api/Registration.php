<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
require APPPATH . 'libraries/RestController.php';
require APPPATH.'libraries/Format.php';

class Registration extends RestController {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array(
			'peserta_model'
			)
		);
		$this->output->delete_cache();
	}
	public function index()
	{	
		$data['event'] = $this->event_model->get_list()->result();
		$this->load->view('register', $data);
	}

	public function save_post(){
		$data['nama_peserta'] = $this->post('nama');
		$data['npm'] = $this->post('npm');
		$data['email'] = $this->post('email');
		$data['no_hp'] = $this->post('handphone');
		$data['id_fakultas'] = $this->post('fakultas');
		$data['id_prodi'] = $this->post('prodi');
		$this->peserta_model->insert($data);
		$message = array('status'=>true, 'title'=>'Update', 'message'=>'success', 'data'=>$data);
		$this->set_response($message, RESTController::HTTP_CREATED);
	}
}
