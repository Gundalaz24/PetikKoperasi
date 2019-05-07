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
		$data = array(
			'data_anggota' => $this->Input_tran_model->data_anggota(),
			'data_barang' => $this->Input_tran_model->data_barang(),
			'join' => $this->Input_tran_model->join_data()
		);

	
		// tambah data
		$this->form_validation->set_rules('anggota','Anggota','required');
		$this->form_validation->set_rules('barang','Barang','required');
		$this->form_validation->set_rules('tgl','Tanggal Belanja','required');
		$this->form_validation->set_rules('jumlah','Jumlah','required|numeric');
		$this->form_validation->set_rules('harga_satuan','Harga Satuan','required');
		$this->form_validation->set_rules('total_harga','Total Harga','required|numeric');	
		

		if($this->form_validation->run() != false){
				
				$anggota = $this->input->POST('anggota', true);
				$barang = $this->input->POST('barang', true);
				$tanggal = $this->input->POST('tgl', true);
                $jumlah = $this->input->POST('jumlah', true);
                $harga = $this->input->POST('harga_satuan', true);
                $total = $this->input->POST('total_harga', true);
                

                $data = [
                'anggota_id' => $anggota,
                'barang_id' => $barang,
                'tanggal_transaksi' => $tanggal,
                'jumlah' => $jumlah,
                'harga_satuan' => $harga,
				'total_harga' => $total
				];
				
				$stok = $query->stok_barang;
				$total_stok = $stok + $this->input->post("jumlah", true);
		
				$stok = $total_stok;
				$id = $query->id_barang;

			$this->Input_tran_model->tambahData($data);
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('input_tran');

		}else{
			$this->load->view('input_transaksi', $data);
		}
	}
}

