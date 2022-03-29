@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Detil Bebarengan</title>
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
hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 30px solid rgba(0, 0, 0, 0);
}

</style>
<div class="content"style="background-image: url('{{Storage::url('assetsweb/meeting.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(184, 165, 83, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <div class="cnt" style="padding-left: 4%; font-size: 25px; ">
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Detil Bebarengan</h1>
                <div class="form-group">
                    <a class="btn btn-dark" href="" role="button" style="position: absolute;right: 80px;width: 200px;margin-bottom: 3%;">Edit Bebarengan</a>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Tanggal: </label>
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Lokasi: </label>
                </div>
                <hr style="border-width: 2px; border-color: black">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Judul Rapat: </label>
                </div>
                <hr style="border-width: 2px; border-color: black">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Tujuan: </label>
                </div>
                <hr style="border-width: 2px; border-color: black">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Notulen: </label>
                </div>
                <hr style="border-width: 2px; border-color: black">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Kesimpulan: </label>
                </div>
                <hr style="border-width: 2px; border-color: black">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">File: </label>
                </div>
                <hr style="border-width: 2px; border-color: black">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Link Lampiran: </label>
                </div>
        </div>
        
    </div>   
</div>
@extends('layouts.footer')