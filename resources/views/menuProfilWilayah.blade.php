@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Profil Wilayah Kerja</title>
<style>
.box-part{
    background:#FFF;
    border-radius:0;
    padding:10px 60px;
    /* margin:30px 0px; */
}
.text{
    margin:20px 0px;
}

.table {
    margin: 0 auto;
    width: 80%;
}
</style>
<div class="content"style="background-image: url('{{Storage::url('assetsweb/pwt.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 80%">
    <div class="blur" style="background: rgba(211, 173, 212, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="text-align: center; padding: 3% 0">Profil Wilayah Kerja</h1>
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 12%;"><br>
        <div class="satu" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Silahkan Upload File .xlsx: </h2><br>
            <button type="submit" class="btn btn-secondary" style="width: 150px">Pilih File</button> <br>
            <button type="submit" class="btn btn-danger"  style="width: 150px">Upload</button>
        </div>
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 20%;"><br>
        <div class="dua" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Lihat Laporan: </h2><br>
            <button type="submit" class="btn btn-success"  style="width: 150px">Dalam Diagram</button> <br>
            <button type="submit" class="btn btn-warning" style="width: 150px">Dalam Tabel</button>
        </div>

    </div>
</div>
@include('layouts.footer')