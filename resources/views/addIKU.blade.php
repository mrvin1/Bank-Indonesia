@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Tambah IKU</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/mountain.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(240, 145, 145, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Tambah IKU</h1>


        <form action="" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Periode</label>
                <div class="col-md-6">
                    <input id="periode" type="date" class="form-control" name="periode" required >
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Jenis IKU</label>
                <select name="jenisiku" id="jenisiku">
                    <option value=""></option>
                    <option value="">IKU Implementasi</option>
                    <option value="">IKU Rekomendasi</option>
                    <option value="">IKU Asesmen</option>
                    <option value="">IKU Data/ Informasi</option>
                    <option value="">IKU Manajemen</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Indikator</label>
                <select name="indikator" id="indikator">
                    <option value=""></option>
                </select>
            </div>
        </form>
    </div>   
</div>
@include('layouts.footer')