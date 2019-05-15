<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input_sim extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Input_simpan_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data ['data'] = $this->Input_simpan_model->comot_data();
	
	
		// tambah data
		$this->form_validation->set_rules('anggota','Anggota','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required|numeric');	

		if($this->form_validation->run() != false){
				
				$anggota_id = $this->input->POST('anggota', true);
                $jumlah = $this->input->POST('jumlah', true);

                $data = [
                'anggota_id' => $anggota_id,
                'jumlah' => $jumlah,
                'tanggal' => date("Y/m/d")
                ];

			$this->Input_simpan_model->tambahData($data);
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('input_sim');

		}else{
			$this->load->view('input_simpan', $data);
		}
	}
}

