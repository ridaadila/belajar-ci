<?php

class Home extends CI_Controller {

    public function index(){
        $this->load->model("DataModel");
        $dataArr = $this->DataModel->getData();

        echo "Nama : " . $dataArr["nama"] . "<br>";
        echo "Status : " . $dataArr["status"] . "<br>";
        echo "Website : " . $dataArr["website"] . "<br>";
    }
}
?>