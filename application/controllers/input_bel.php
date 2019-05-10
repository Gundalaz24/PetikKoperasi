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
		$data['data'] = json_encode($this->Input_bel_model->comot_data());

	
		// tambah data
		$this->form_validation->set_rules('jenis_barang','Barang','required');
		$this->form_validation->set_rules('jumlah_barang','Jumlah','required|numeric');	

		if($this->form_validation->run() != false){
				
				$query = $this->Input_bel_model->get_data_by_id($this->input->post("jenis_barang",true));
            
                $data = [
					'barang_id' => $query->id_barang,
					'jumlah' => $this->input->post("jumlah_barang",true),
					'tanggal' => date("Y/m/d"),
					'total_belanja' => $this->input->post("total_belanja",true)
                ];

			$this->Input_bel_model->tambahData($data);
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('input_bel');

		}else{
			$this->load->view('input_belanja', $data);
		}
	}

}

