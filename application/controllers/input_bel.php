<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input_bel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Input_bel_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['data'] = $this->Input_bel_model->comot_data();

	
		// tambah data
		$this->form_validation->set_rules('barang_id','Barang','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required|numeric');	
		$this->form_validation->set_rules('tanggal','Tanggal Belanja','required');

		if($this->form_validation->run() != false){
				
				$barang_id = $this->input->POST('barang_id', true);
                $jumlah = $this->input->POST('jumlah', true);
                // $total = $this->input->POST('total_belanja', true);
                $tanggal = $this->input->POST('tanggal', true);

                $data = [
                'barang_id' => $barang_id,
                'jumlah' => $jumlah,
                // 'total_belanja' => $total,
                'tanggal_belanja' => $tanggal
                ];

			$this->Input_bel_model->tambahData($data);
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('input_bel');

		}else{
			$this->load->view('input_belanja', $data);
		}
	}

}

