<?php
class Koneksi{
    private $server = "localhost";
    private $username = "id5720773_def";
    private $password = "resty123";
    private $db = "id5720773_toko";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
                $this->password, $this->db);
        return $hubungan;
    }

}
?>