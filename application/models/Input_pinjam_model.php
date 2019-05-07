<?php
class Input_pinjam_model extends CI_Model {


        public function comot_data()
        {
                $query2 = $this->db->get('anggota');
                return $query2->result();
        }

        public function join_data()
        {
                $this->db->select('*');
                $this->db->from('pinjam_uang');
                $this->db->join('anggota','pinjam_uang.anggota_id = anggota.id_anggota');
                $query = $this->db->get();
                return $query->result();
        }

        public function tambahData($data){
                $this->db->insert('pinjam_uang', $data);
        }

        public function hapus_data($id)
        {
                $this->db->delete('pinjam_uang', array('id_pinjam' => $id)); 
        }

}
?>