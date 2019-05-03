<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history_bel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Input_bel_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['data'] = $this->Input_bel_model->join_data();
			$this->load->view('history_belanja', $data);
	}
	public function hapus($id)
	{
		$this->Input_bel_model->hapus_data($id);
		$this->session->set_flashdata('flash', 'di Hapus');
		redirect('history_bel');
	}
	public function edit()
	{
		$data['data'] = $this->Input_bel_model->comot_data();
		$this->load->view('upHistory_bel', $data);
		
	}
}