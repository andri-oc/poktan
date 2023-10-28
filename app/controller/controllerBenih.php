<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/poktan/app/model/koneksi.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/poktan/app/model/modelBenih.php");

if (
    isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
    )
{
    //area kode method

    $aksi=$_POST['perintah'];

    $objekModel= new modelBenih();
    if ($aksi=="Cari_Data")
    {
        $aksi=$objekModel->getSatuBarisPoktan($_POST['idPoktan']);
        $informasi['hasil']=$aksi[0];
        $informasi['data']=$aksi[1];
        echo json_encode($informasi);
    }

    if ($aksi=="recordDataBenih")
    {
        $aksi=$objekModel->DataViewBenih();
        $informasi['hasil']=$aksi[0];
        $informasi['data']=$aksi[1];
        echo json_encode($informasi);
    }

    if ($aksi == "Simpan_Data") 
    {

        $idPoktan = $_POST['idPoktan'];
        $tglBantuan = $_POST['tglBantuan'];
        $jumlahBantuan = $_POST['jumlahBantuan'];
        $jenisBantuan = $_POST['jenisBantuan'];
        $aksi = $objekModel->SimpanBantuanBenih($idPoktan, $tglBantuan, $jumlahBantuan, $jenisBantuan);
        $informasi['hasil'] = $aksi[0];
        $informasi['pesan'] = $aksi[1];
        echo json_encode($informasi);
    }

    if($aksi=="Cari_Edit")
    {
        $aksi=$objekModel->getBenihEdit($_POST['id']);
        $informasi['hasil']=$aksi[0];
        $informasi['data']=$aksi[1];
        echo json_encode($informasi);
    }

    if ($aksi == "Ubah_Data") 
    {
        
        $id=$_POST['id'];
        $idPoktan = $_POST['idPoktan'];
        $tglBantuan = $_POST['tglBantuan'];
        $jumlahBantuan = $_POST['jumlahBantuan'];
        $jenisBantuan = $_POST['jenisBantuan'];
        $aksi = $objekModel->ubahBantuanBenih($id,$idPoktan, $tglBantuan, $jumlahBantuan, $jenisBantuan);
        $informasi['hasil'] = $aksi[0];
        $informasi['pesan'] = $aksi[1];
        echo json_encode($informasi);
    }


    if($aksi=="Hapus_Data")
    {
        $id=$_POST['id'];
        $aksi=$objekModel->hapusBantuanBenih($id);
        $informasi['hasil'] = $aksi[0];
        $informasi['pesan'] = $aksi[1];
        echo json_encode($informasi);
    }
}
?>