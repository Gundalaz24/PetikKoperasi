<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class history_pin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Input_pinjam_model');
	}
	public function index()
	{
		$data['data'] = $this->Input_pinjam_model->join_data();
		$this->load->view('history_pinjam', $data);

	}
	public function hapus($id)
	{
		$this->Input_pinjam_model->hapus_data($id);
		$this->session->set_flashdata('flash', 'di Hapus');
		redirect('history_pin');
	}
}
