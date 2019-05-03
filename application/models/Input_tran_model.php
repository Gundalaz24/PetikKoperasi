<?php
class Input_tran_model extends CI_Model {


        function data_anggota()
        {
                return $this->db->get('anggota');
        }
        function data_barang()
        {
                return $this->db->get('barang');
                
        }
        public function join_data()
        {
                $this->db->select('*');
                $this->db->from('daftar_kebutuhan');
                $this->db->join('anggota','daftar_kebutuhan.anggota_id = anggota.id_anggota');
                $this->db->join('barang','daftar_kebutuhan.barang_id = barang.id_barang');
                $query = $this->db->get();
                return $query->result();
        }

        public function tambahData($data){
                $this->db->insert('daftar_kebutuhan', $data);
        }

        public function hapus_data($id)
        {
                $this->db->delete('transaksi', array('id_transaksi' => $id)); 
        }

}
?>