@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Ganti Kata Sandi</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/bg.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(158, 248, 233, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="text-align: center; padding-top: 2%; padding-bottom: 5%">Ganti kata sandi</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight: bold">Password lama</label>
                
                <div class="col-md-6">
                    <input id="lama" type="password" class="form-control" name="lama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight: bold">Password Baru</label>
                
                <div class="col-md-6">
                    <input id="baru" type="password" class="form-control" name="baru" required>
                </div>
            </div>
            
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-success" style="display: block;margin-left: auto;margin-right: auto;width: 40%;">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@include('layouts.footer')