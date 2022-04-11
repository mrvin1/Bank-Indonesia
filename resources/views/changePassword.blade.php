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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/bg.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 80vh">
    <div class="blur" style="background: rgba(158, 248, 233, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
            <div class="container" style="padding-top:4%; padding-bottom: 4% ">
                <div class="row justify-content-center" style="margin-top: 6%">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Ganti Kata Sandi</div>
                            <div class="card-body"> 
                                <form action="/changepassword" method="POST" style="padding: 0 20%;">
                                    @csrf
                                    <div class="form-group row" >
                                        <label for="password-confirm">Kata Sandi Lama: </label>
                                        <div class="col-md-6">
                                            <input type="password" name="old" id="old" style="max-width: 600px" required>
                                        </div>    
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm">Kata Sandi Baru: </label>
                                        <div class="col-md-6">
                                            <input type="password" name="new" id="new" style="max-width: 600px" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password-confirm">Konfirmasi Kata Sandi: </label>
                                        <div class="col-md-6">
                                            <input type="password" name="con" id="con" style="max-width: 580px" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-top:3% ">
                                            <button type="submit" class="btn btn-success" style="display: block;margin-left: auto;margin-right: auto;width: 100px;">
                                                Simpan
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </div>
        </form>
        </div>
    </div>
</div>
@include('layouts.footer')