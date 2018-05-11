<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4650193_coder";
    private $password = "rahasia";
    private $db = "id4650193_toko";
    private $hubungan;

    function ambilKoneksi() {
        $hubungan = new mysqli($this->server, $this->username, 
                $this->password, $this->db);
        return $hubungan;
    }

}
?>