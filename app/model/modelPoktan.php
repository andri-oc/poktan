<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/poktan/app/model/koneksi.php");

class modelPoktan extends koneksi
{

    public function __construct()
    {
        $this->koneksiDatabase();
    }

    //kode untuk menangkap data tabel poktan
    public function DataPoktan()
    {

        try {
            $crud = $this->koneksiDB;
            $query = $crud->prepare("SELECT * FROM poktan ORDER BY idpoktan ASC");
            $query->execute();
            $hasil[0] = true;
            $hasil[1] = $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            $hasil[0] = false;
            $hasil[1] = $err->getMessage();
        }

        return $hasil;
    }

    public function SimpanDataPoktan($idPoktan, $namaPoktan, $jumlahPoktan, $telpPoktan, $kotaPoktan)
    {
        try {
            $crud = $this->koneksiDB;
            $query = $crud->prepare("INSERT INTO poktan (idpoktan,nama_poktan,jumlah_Poktan,telp,kota) VALUE(:id,:nama,:jumlah,:telp,:kota)");
            $query->bindParam("id", $idPoktan);
            $query->bindParam("nama", $namaPoktan);
            $query->bindParam("jumlah", $jumlahPoktan);
            $query->bindParam("telp", $telpPoktan);
            $query->bindParam("kota", $kotaPoktan);
            $query->execute();
            $hasil[0] = true;
            $hasil[1] = "Kelompok Tani Berhasi Disimpan";
        } catch (PDOException $pesan) {
            $hasil[0] = false;
            $hasil[1] = $pesan->getMessage();
        }

        return $hasil;
    }

    public function UbahDataPoktan($idPoktan, $namaPoktan, $jumlahPoktan, $telpPoktan, $kotaPoktan)
    {
        try {
            $crud = $this->koneksiDB;
            $query = $crud->prepare("UPDATE poktan SET nama_poktan=:nama,jumlah_poktan=:jumlah, telp=:telp, kota=:kota WHERE idpoktan=:id");
            $query->bindParam("id", $idPoktan);
            $query->bindParam("nama", $namaPoktan);
            $query->bindParam("jumlah", $jumlahPoktan);
            $query->bindParam("telp", $telpPoktan);
            $query->bindParam("kota", $kotaPoktan);
            $query->execute();
            $hasil[0] = true;
            $hasil[1] = "Kelompok Tani Berhasil Diubah";
        } catch (PDOException $pesan) {
            $hasil[0] = false;
            $hasil[1] = $pesan->getMessage();
        }

        return $hasil;
    }

    public function hapusDataPoktan($idPoktan)
    {
        try {
            $crud = $this->koneksiDB;
            $query = $crud->prepare("DELETE FROM poktan WHERE idpoktan=:id");
            $query->bindParam("id", $idPoktan);
            $query->execute();
            $hasil[0] = true;
            $hasil[1] = 'Kelompok Tani Berhasil dihapus';
        } catch (PDOException $pesan) {
            $hasil[0] = false;
            $hasil[1] = $pesan->getMessage();
        }
        return $hasil;
    }
}
