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
        <form action="/changepassword" method="POST" style="padding: 0 20%">
            @csrf
            <div class="form-group">
                <label for="password-confirm">Kata Sandi Lama: </label>
                <input type="password" name="old" id="old" style="width: 600px" required>
            </div>
            <div class="form-group">
                <label for="password-confirm">Kata Sandi Baru: </label>
                <input type="password" name="new" id="new" style="width: 600px" required>
            </div>
            <div class="form-group">
                <label for="password-confirm">Konfirmasi Kata Sandi: </label>
                <input type="password" name="con" id="con" style="width: 580px" required>
            </div>
            <div class="form-group" style="padding-top:3% ">
                    <button type="submit" class="btn btn-success" style="display: block;margin-left: auto;margin-right: auto;width: 40%;">
                        Simpan
                    </button>
            </div>
        </form>
        </div>
    </div>
</div>
@include('layouts.footer')