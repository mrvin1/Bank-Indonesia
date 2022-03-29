@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Detil IKU</title>
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
        <div class="cnt" style="padding-left: 4%; font-size: 25px; ">
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Tampil IKU</h1>
                <div class="form-group">
                    <a class="btn btn-dark" href="" role="button" style="position: absolute;right: 80px;width: 100px;margin-bottom: 3%;">Edit IKU</a>
                </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Periode: </label>
                    </div> 
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Jenis IKU: </label>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Indikator: </label>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Realisasi: </label>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Status: </label>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Keterangan: </label>
                    </div>
                
                
        </div>
        
    </div>   
</div>
@extends('layouts.footer')