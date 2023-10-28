<?php require("header.php") ?>

<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">ID POKTAN</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="idPoktan">
                <input type="hidden" class="form-control" id="idBenih">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama POKTAN</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="namaPoktan" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="telpPoktan" disabled>
            </div>
        </div>
    </div> <!-- akhir col-md-6-->

<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Tanggal Bantuan</label>
        <div class="col-sm-6">
            <input type="date" id="tglBantuan" class="form-control" >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Jumlah Bantuan</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="jumlahBantuan">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Jenis Bantuan</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="jenisBantuan">
        </div>
    </div><br>

    <div class="form-group row">
        <label class="col-sm-4"> </label>
        <div class="col-sm-8">
            <a class="btn btn-success" id="btnSimpan">Simpan</a>
            <a class="btn btn-success" id="btnUbah">Ubah</a>
            <a class="btn btn-success" id="btnHapus">Hapus</a>
            <a class="btn btn-success" id="btnClear">Clear</a>
        </div>
    </div>
</div>  <!--akhir container-->
</div>

<br>
<div class="table-responsive margin">
    <table id="table-benih" class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5px">#</th>
                <th style="width: 10px">ID Poktan</th>
                <th style="width: 50px;">Nama Poktan</th>
                <th style="width: 30px;">Telp</th>
                <th style="width: 40px;">Kota</th>
                <th style="width: 30px;">Jumlah Bantuan (Kg)</th>
                <th style="width: 30px;">Jenis Benih</th>
                <th style="width: 30px;">Tanggal Terima</th>
                <th style="width: 10px;"></th>
            </tr>
        </thead>
    </table>
</div>

<script type="text/javascript" src="./app/lib/js/benih.js"></script>
<?php require("footer.php") ?>