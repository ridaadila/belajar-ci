<?php
class DataModel extends CI_Model {

    public function getData(){
        $data = array(
            'nama'=> 'David Naista',
            'status'=> 'Mahasiswa',
            'website'=> 'https://naistudio.com'
        );
        return $data;
    }
}
?>