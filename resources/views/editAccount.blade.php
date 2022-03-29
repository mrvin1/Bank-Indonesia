@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Edit Akun</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/indonesian.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(240, 145, 145, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Edit Akun</h1>
        <div class="cnt" style="padding-left: 6% ">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Nama Pengguna</label>
                    <input type="text" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Role</label>
                    <select name="role" id="role" required> 
                        <option value="skrg">skrg</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="display: block;margin-left: auto;margin-right: auto;width: 300px;">Simpan</button>
            </form>
        </div>
        <form action="" method="POST" style="display: flex;">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="font-weight: bold">*Pass reset: purwokerto111</label>
            <div class="form-group row mb-0 " style="display: block;margin-left: auto;margin-right: auto;width: 40%;">
                <div class="col-md-6 offset-md-4">
                    <input id="password" type="password" class="form-control" name="password" hidden value="purwokerto111">
                    <button type="submit" class="btn btn-danger">
                        Reset Password
                    </button>
                </div>
            </div>
        </form>
    </div>   
</div>
@include('layouts.footer')