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
		
		if($this->input->post('keyword') ){
			$data['data'] = $this->Input_bel_model->cari_data('barang');
		}

		$this->load->view('history_belanja', $data);
	}
	public function hapus($id)
	{
		$this->Input_bel_model->hapus_data($id);
		$this->session->set_flashdata('flash', 'di Hapus');
		redirect('history_bel');
	}
	public function ubah($id)
	{	
		$data = [
			'datax' => ($this->Input_bel_model->get_by_id($id)),
			'data_barang' =>  json_encode($this->Input_bel_model->comot_data())
		];
		
		// ubah data
		$this->form_validation->set_rules('jenis_barang','Barang','required');
		$this->form_validation->set_rules('jumlah_barang','Jumlah','required|numeric');
		$this->form_validation->set_rules('harga_barang','Harga Satuan','required');
		$this->form_validation->set_rules('total_belanja','Total Harga','required|numeric');	
		

		if($this->form_validation->run() != false){

			$queryDua = $this->Input_bel_model->get_data_by_id($this->input->post("jenis_barang",true));

			$data = [
			'id_belanja' => $this->input->post("id_belanja",true),
			'barang_id' => $queryDua->id_barang,
			'tanggal' => date("Y/m/d"),
			'jumlah' => $this->input->post("jumlah_barang",true),
			'total_belanja' => $this->input->post("total_belanja",true)
			];

			$this->Input_bel_model->ubah_data($data);
			$this->session->set_flashdata('flash', 'diubah');
			redirect('history_bel');

		}else{
			$this->load->view('upHistory_bel' ,$data);
		}
	}
}