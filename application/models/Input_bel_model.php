<?php
class Input_bel_model extends CI_Model {


        public function comot_data()
        {
                $query = $this->db->get('barang');
                return $query->result();
        }
        public function cari_data(){
                $keyword = $this->input->post('keyword', true);
                $this->db->or_like('nama_barang', $keyword);
                $this->db->select('*');
                $this->db->from('belanja');
                $this->db->join('barang','belanja.barang_id = barang.id_barang');
                $query = $this->db->get();
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
        public function get_by_id($id)
	{
		return $this->db->get_where('belanja', ['id_belanja' => $id])->row_array();
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
        public function ubah_data($data)
        {
                $this->db->where('id_belanja', $this->input->post('id_belanja'));
                $hasil = $this->db->update('belanja',$data);
                return $hasil;  
        }

}
?>