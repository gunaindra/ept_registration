<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'event_model'
			)
		);
		$this->output->delete_cache();
	}
	public function index()
	{	
		$data['event'] = $this->event_model->get()->result();
		$this->load->view('booking', $data);
	}
}
