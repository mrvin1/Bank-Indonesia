@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Daftar IKU</title>
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
input[type=search]::-webkit-search-cancel-button {
    -webkit-appearance: searchfield-cancel-button;
}

</style>
<div class="bg-image"style="background-image: url('{{Storage::url('assetsweb/mountain.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(245, 243, 243, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="text-align: center; padding-top: 2%;">Daftar IKU</h1>
        <div class="b" style="display: inline-block;position: absolute;right: 0px;width: 300px;">
            <a class="btn btn-success" href="{{route('addIKU')}}" role="button">Tambah</a>
            <a class="btn btn-dark" href="" role="button">Export .xlsx</a>
        </div>
        <div class="row" style="padding: 3%; flex-direction: row" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                            <form class="form-inline" method="POST" action="/home" style="display: inline-block;">
                                @csrf
                                <p class="text-left">Periode: </p>
                                    <select name="periode" id="periode">
                                        <option value=""></option>
                                        <option value="">Januari</option>
                                    </select> 
                                    <p class="text-left">Cari berdasarkan indikator: </p>
                                    <input type="search" placeholder="Search..."/> 
                                    <p class="text-left">Jenis IKU: </p>
                                    <select name="jenisiku" id="jenisiku">
                                        <option value=""></option>
                                        <option value="">IKU Implementasi</option>
                                        <option value="">IKU Rekomendasi</option>
                                        <option value="">IKU Asesmen</option>
                                        <option value="">IKU Data/ Informasi</option>
                                        <option value="">IKU Manajemen</option>
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-primary" style="margin-top: 5%">Implementasikan</button>  
                            </form>
                        </div>

                        <div class="col-md-8">
                            
                            <table class="table table-striped table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">Indikator</th>
                                    <th scope="col">Realisasi</th>
                                    <th scope="col">Keterangan</th>
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
</div>
@include('layouts.footer')