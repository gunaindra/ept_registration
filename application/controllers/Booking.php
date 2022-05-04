<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model(array(
			'event_model',
			'fakultas_model',
			'prodi_model'
			)
		);
		$this->output->delete_cache();
	}
	public function index()
	{	
		$data['event'] = $this->event_model->get_list()->result();
		$this->load->view('booking', $data);
	}

	public function register($id_event=null){
		$data['id_event'] = $id_event;
		$data['event'] = $this->event_model->get(array('id_event'=>$id_event))->row();
		$data['fakultas'] = $this->fakultas_model->get()->result();
		// $data['prodi'] = $this->prodi_model->get()->result();
		$this->load->view('register', $data);
	}

	public function simpanregister(){
		$nama_peserta = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('handphone');
		$alamat = $this->input->post('alamat');
		$id_fakultas = $this->input->post('id_fakultas');
		$id_prodi = $this->input->post('id_prodi');

		$data = array(
			'nama_peserta' => $nama_peserta,
			'npm' => $npm,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_fakultas' => $id_fakultas,
			'id_prodi' => $id_prodi
		);
		$this->peserta_model->save($data);
	}
}
