<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input_tran extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Input_tran_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
		'data_anggota' => json_encode($this->Input_tran_model->data_anggota()),
		'data_barang' =>  json_encode($this->Input_tran_model->data_barang())
		];
		
		// tambah data
		$this->form_validation->set_rules('anggota','Anggota','required');
		$this->form_validation->set_rules('jenis_barang','Barang','required');
		$this->form_validation->set_rules('jumlah_barang','Jumlah','required|numeric');
		$this->form_validation->set_rules('harga_barang','Harga Satuan','required');
		$this->form_validation->set_rules('total_belanja','Total Harga','required|numeric');	
		

		if($this->form_validation->run() != false){
				
				$querySatu = $this->Input_tran_model->get_anggota_by_id($this->input->post("anggota",true));
				$queryDua = $this->Input_tran_model->get_data_by_id($this->input->post("jenis_barang",true));

                $data = [
                'anggota_id' => $querySatu->id_anggota,
                'barang_id' => $queryDua->id_barang,
                'tanggal' => date("Y/m/d"),
                'jumlah' => $this->input->post("jumlah_barang",true),
                'harga_satuan' => $this->input->post("harga_barang",true),
				'total_harga' => $this->input->post("total_belanja",true)
				];

			$this->Input_tran_model->tambahData($data);
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('input_tran');

		}else{
			$this->load->view('input_transaksi', $data);
		}
	}

}

