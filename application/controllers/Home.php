<?php

class Home extends CI_Controller {

    public function index() {
       $this->load->model("UserModel");
       $data = array(
           "pegawai" => $this->UserModel->get()
       );
       $this->load->view("HomeView", $data);
    }

    public function detail($id) {
        $this->load->model("UserModel");
        $data = array(
            "pegawai" => $this->UserModel->detail($id)
        );
        $this->load->view("DetailView", $data);
    }

    public function tambah() {
        $this->load->model("UserModel");
        if($this->input->method()=="post") {
            $insert = $this->UserModel->tambah(array(
                'nama'=> $this->input->post("nama"),
                'email'=> $this->input->post("email"),
                'alamat'=>$this->input->post("address")
            ));

            if($insert) {
                echo "Sukses tambah user";
            }
            else {
                echo "gagal tambah user";
            }
        }
        $this->load->view("FormView");
    }

    public function ubah() {
        $this->load->model("UserModel");

        if($this->input->method()=="post") {
            $insert = $this->UserModel->tambah(array(
                'nama' => $this->input->post("nama"),
                'email' => $this->input->post("email"),
                'alamat' => $this->input->post("address")
            ));

            if($insert) {
                echo "Sukses update user";
            }
            else{
                echo "Gagal update user";
            }
        }
        $this->load->view("FormView");
    }

    public function hapus($id=0) {
        $this->load->model("UserModel");
        $hapus = $this->UserModel->hapus($id);
        if($hapus) {
            echo "<script>alert('Sukses hapus artikel')</script>";
        }
        else {
            echo "<script>alert('Gagal hapus artikel')</script>";
        }
        echo '<meta http-equiv="refresh" content="0;url=../../../">';
    }
}
?>