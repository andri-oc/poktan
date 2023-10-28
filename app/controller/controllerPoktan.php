<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/poktan/app/model/koneksi.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/poktan/app/model/modelPoktan.php");

if (
    isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
) {
    $aksi = $_POST['perintah'];
    $objekModel = new modelPoktan();

    if ($aksi == "recordDataPoktan") {
        $aksi = $objekModel->DataPoktan();
        $informasi['hasil'] = $aksi[0];
        $informasi['data'] = $aksi[1];
        echo json_encode($informasi);
    }

    if ($aksi == "Simpan_Data") {

        $idPoktan = $_POST['idPoktan'];
        $namaPoktan = $_POST['namaPoktan'];
        $jumlahPoktan = $_POST['jumlahPoktan'];
        $kotaPoktan = $_POST['kotaPoktan'];
        $telpPoktan = $_POST['telpPoktan'];
        $aksi = $objekModel->SimpanDataPoktan($idPoktan, $namaPoktan, $jumlahPoktan, $telpPoktan, $kotaPoktan);
        $informasi['hasil'] = $aksi[0];
        $informasi['pesan'] = $aksi[1];
        echo json_encode($informasi);
    }

    if ($aksi == "Ubah_Data") {
        $idPoktan = $_POST['idPoktan'];
        $namaPoktan = $_POST['namaPoktan'];
        $jumlahPoktan = $_POST['jumlahPoktan'];
        $kotaPoktan = $_POST['kotaPoktan'];
        $telpPoktan = $_POST['telpPoktan'];
        $aksi = $objekModel->ubahDataPoktan($idPoktan, $namaPoktan, $jumlahPoktan, $telpPoktan, $kotaPoktan);
        $informasi['hasil'] = $aksi[0];
        $informasi['pesan'] = $aksi[1];
        echo json_encode($informasi);
    }

    if ($aksi == "Hapus_Data") {
        $idPoktan = $_POST['idPoktan'];
        $aksi = $objekModel->hapusDataPoktan($idPoktan);
        $informasi['hasil'] = $aksi[0];
        $informasi['pesan'] = $aksi[1];
        echo json_encode($informasi);
    }
}
