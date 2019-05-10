<?php
class Input_bel_model extends CI_Model {


        public function comot_data()
        {
                $query = $this->db->get('barang');
                return $query->result();
        }

        public function join_data()
        {
                $this->db->select('*');
                $this->db->from('belanja');
                $this->db->join('barang','belanja.barang_id = barang.id_barang');
                $query = $this->db->get();
                return $query->result();
        }
        public function get_data_by_id($data)
		{
		        $sql = "select * from barang where nama_barang = ? ";
		        return $this->db->query($sql, $data)->row();
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