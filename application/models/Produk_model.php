<?php
class Produk_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function ambil_data()
        {
                $query = $this->db->get('barang'); //syntax di samping sama saja dengan query (select * from enteries limit 10)
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('barang', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('barang', $this, array('id' => $_POST['id']));
        }

}
?>