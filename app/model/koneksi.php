<?php
class koneksi{
    public $koneksiDB;

    public function __construct(){}

    public function koneksiDatabase(){
        $user="root";
        $password="";
        $database="monitoring_petani";
        try {
            $this->koneksiDB = new PDO("mysql:host=localhost;dbname=".$database,$user,$password);
            $this->koneksiDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $salah) {
                die($salah);
            }
    }
}

?>