<?php
class UserModel extends CI_Model {

        public function get(){
            $this->load->database();
            return $this->db->get('pegawai')->result();
        }

        public function detail($id) {
            $this->load->database();
            $this->db->where("id", $id);
            return $this->db->get("pegawai")->result();
        }

        public function tambah($data = array()) {
            $this->load->database();
            return $this->db->insert("pegawai", $data);
        }

        public function ubah($data = array(), $id) {
            $this->load->database();
            $this->db->where("id", $id);
            return $this->db->update("pegawai", $data);
        }

        public function hapus($id) {
            $this->load->database();
            $this->db->where("id",$id);
            return $this->db->delete("pegawai");
        }
}
?>