<?php
class Input_simpan_model extends CI_Model {


        public function comot_data()
        {
                $query2 = $this->db->get('anggota');
                return $query2->result();
        }

        public function join_data()
        {
                $this->db->select('*');
                $this->db->from('simpan_uang');
                $this->db->join('anggota','simpan_uang.anggota_id = anggota.id_anggota');
                $query = $this->db->get();
                return $query->result();
        }

        public function tambahData($data){
                $this->db->insert('simpan_uang', $data);
        }

        public function hapus_data($id)
        {
                $this->db->delete('simpan_uang', array('id_simpan' => $id)); 
        }
        public function cari_data(){
                $keyword = $this->input->post('keyword', true);
                $this->db->or_like('nama_anggota', $keyword);
                $this->db->select('*');
                $this->db->from('simpan_uang');
                $this->db->join('anggota','simpan_uang.anggota_id = anggota.id_anggota');
                $query = $this->db->get();
                return $query->result();
        }

}
?>