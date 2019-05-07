<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history_sim extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Input_simpan_model');
	}
	public function index()
	{
		$data['data'] = $this->Input_simpan_model->join_data();
		$this->load->view('history_simpan', $data);

	}
	public function hapus($id)
	{
		$this->Input_simpan_model->hapus_data($id);
		$this->session->set_flashdata('flash', 'di Hapus');
		redirect('history_sim');
	}
}
