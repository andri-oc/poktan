<?php require("header.php") ?>

<form>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">ID Kelompok Tani</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="idPoktan">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Kelompok Tani</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaPoktan">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jumlah Kelompok Tani</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jumlahPoktan">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">No. Telp</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="telpPoktan">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kota</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kotaPoktan">
        </div>
    </div> <br>

    <div class="form-group row">
        <div class="col-sm-10">
            <button class="btn btn-success" id="btnSimpan">Simpan</button> <button class="btn btn-success" id="btnUbah">Ubah</button>
        </div>
    </div>
</form> <br>

<div class="table-responsive margin">
    <table id="table-poktan" class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5px">#</th>
                <th style="width: 10px">ID Poktan</th>
                <th style="width: 50px;">Nama Poktan</th>
                <th style="width: 20px;">Jumlah Poktan</th>
                <th style="width: 30px;">Telp</th>
                <th style="width: 40px;">Kota</th>
                <th style="width: 10px;"></th>
            </tr>
        </thead>
    </table>
</div>
<script type="text/javascript" src="./app/lib/js/poktan.js"></script>
<?php require("footer.php") ?>