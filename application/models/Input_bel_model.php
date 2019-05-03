<?php
class Input_bel_model extends CI_Model {


        public function comot_data()
        {
                $query1 = $this->db->get('barang');
                $query2 = $this->db->get('belanja');
                return $query1->result();
                return $query2->result();
        }

        public function join_data()
        {
                $this->db->select('*');
                $this->db->from('belanja');
                $this->db->join('barang','belanja.barang_id = barang.id_barang');
                $query = $this->db->get();
                return $query->result();
        }

        public function tambahData($data){
                $this->db->insert('belanja', $data);
        }

        public function hapus_data($id)
        {
                $this->db->delete('belanja', array('id_belanja' => $id)); 
        }

}
?>