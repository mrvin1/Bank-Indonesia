@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Daftar Akun</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/Indonesian.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(240, 145, 145, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="text-align: center; padding-top: 2%;">Daftar Akun</h1>
        <div class="row justify-content-end" style="padding: 6%;" >
            <div class="col-md">
                <div class="card-body">
                    <table class="table table-striped table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Nama Pengguna</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mark</th>
                            <td>1</td>
                            <td>admin</td>
                            <td>
                            <a class="btn btn-primary" href="genredetail/" role="button">Edit</a>
                            <a class="btn btn-danger" href="genredel/" role="button">Hapus</a>
                            </td>
                        </tr>
                        </tbody>
                        {{-- {{$books->links()}} --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')