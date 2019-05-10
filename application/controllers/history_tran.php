<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history_tran extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Input_tran_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['data'] = $this->Input_tran_model->join_data();
		$this->load->view('history_transaksi' ,$data);
	}
	public function hapus($id)
	{
		$this->Input_tran_model->hapus_data($id);
		$this->session->set_flashdata('flash', 'di Hapus');
		redirect('history_tran');
	}
}
