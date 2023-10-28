<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/poktan/app/model/koneksi.php");

class modelBenih extends koneksi{

    public function __construct(){
        $this->koneksiDatabase();
 
    }

    public function getSatuBarisPoktan($idPoktan){
        try{
            $crud = $this->koneksiDB;
            $query = $crud->prepare("SELECT * FROM poktan WHERE idpoktan='$idPoktan'");
            $query->execute();
            $hasil[0] = true;
            $hasil[1] = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            $hasil[0] = false;
            $hasil[1] = $err->getMessage();
        }

        return $hasil;
        }

    //kode untuk menangkap data tabel view benih
    public function DataViewBenih(){

        try{
            $crud = $this->koneksiDB;
            $query = $crud->prepare("SELECT * FROM view_benih ORDER BY tgl_bantuan ASC");
            $query->execute();
            $hasil[0] = true;
            $hasil[1] = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            $hasil[0] = false;
            $hasil[1] = $err->getMessage();
        }

        return $hasil;
        }

        //method simpan Simpan Bantuan Benih
        public function SimpanBantuanBenih($idPoktan, $tgl, $jumlah, $jenis)
        {
            try {
                $crud = $this->koneksiDB;
                $query = $crud->prepare("INSERT INTO benih (idpoktan,tgl,jumlah_benih,jenis_benih) VALUE(:id,:tgl,:jumlah,:jenis)");
                $query->bindParam("id", $idPoktan);
                $query->bindParam("tgl", $tgl);
                $query->bindParam("jumlah", $jumlah);
                $query->bindParam("jenis", $jenis);
                $query->execute();
                $hasil[0] = true;
                $hasil[1] = "Bantuan Benih Berhasi Disimpan"; ;
            } catch (PDOException $pesan) {
                $hasil[0] = false;
                $hasil[1] = $pesan->getMessage();
            }
    
            return $hasil;
        }

        public function getBenihEdit($id){
            try{
                $crud = $this->koneksiDB;
                $query = $crud->prepare("SELECT * FROM view_benih WHERE id='$id'");
                $query->execute();
                $hasil[0] = true;
                $hasil[1] = $query->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $err) {
                $hasil[0] = false;
                $hasil[1] = $err->getMessage();
            }
    
            return $hasil;
        }

        public function ubahBantuanBenih($id,$idPoktan,$tgl,$jumlah,$jenis){
            try {
                $crud = $this->koneksiDB;
                $query = $crud->prepare("UPDATE benih SET idpoktan=:idpoktan,tgl=:tgl,jumlah_benih=:jumlah,jenis_benih=:jenis WHERE id=:id");
                $query->bindParam("id", $id);
                $query->bindParam("idpoktan", $idPoktan);
                $query->bindParam("tgl", $tgl);
                $query->bindParam("jumlah", $jumlah);
                $query->bindParam("jenis", $jenis);
                $query->execute();
                $hasil[0] = true;
                $hasil[1] = "Bantuan Benih Tani Berhasi Diubah"; ;
            } catch (PDOException $pesan) {
                $hasil[0] = false;
                $hasil[1] = $pesan->getMessage();
            }
    
            return $hasil;
        }

        public function hapusBantuanBenih($id){
            try {
                $crud=$this->koneksiDB;
                $query=$crud->prepare("DELETE FROM benih WHERE id=:id");
                $query->bindParam("id",$id);
                $query->execute();
                $hasil[0]=true;
                $hasil[1]="Bantuan Benih Tani Berhasil dihapus"; ;
            } catch (PDOException $pesan) {
                $hasil[0] = false;
                $hasil[1] = $pesan->getMessage();
            }
    
            return $hasil;
        }
    
}

?>