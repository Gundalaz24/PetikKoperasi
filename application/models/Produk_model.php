<?php
class Produk_model extends CI_Model {


        public function ambil_data()
        {
                $query = $this->db->get('barang'); 
                return $query->result();
        }
        public function cari_data(){
                $keyword = $this->input->post('keyword', true);
                $this->db->or_like('nama_barang', $keyword);
                $this->db->or_like('harga_barang', $keyword);
                $query = $this->db->get('barang'); 
                return $query->result();
        }

}
?>