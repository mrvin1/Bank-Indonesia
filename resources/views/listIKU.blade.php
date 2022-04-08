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
            <a class="btn btn-dark" href="" role="button">Export .xlsx</a>
            <a class="btn btn-success" href="{{route('addIKU')}}" role="button">Tambah</a>
        </div>
        <div class="row" style="padding: 3%; flex-direction: row" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                            <form class="form-inline" method="POST" action={{route('listIKU')}} style="display: inline-block;">
                                @csrf
                                <p class="text-left">Periode: </p>
                                <input type="month" id="tgl" name="tgl" min="2021-03" required>
                                    <p class="text-left">Cari berdasarkan indikator: </p>
                                    <input type="search" placeholder="Search..." name="cari" id="cari"> 
                                    <p class="text-left">Jenis IKU: </p>
                                    <select name="jenisiku" id="jenisiku">
                                        <option value=""></option>
                                        <option value="1">IKU Implementasi</option>
                                        <option value="2">IKU Rekomendasi</option>
                                        <option value="3">IKU Asesmen</option>
                                        <option value="4">IKU Data/ Informasi</option>
                                        <option value="5">IKU Manajemen</option>
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
                                     @forelse ($iku as $index => $value)
                                     <tr>
                                         <td><a href="detailiku/{{$iku[$index]->ikuid}}" style="text-decoration: none; color: white">{{$iku[$index]->indikatordesc}}</a></td>
                                         <td>{{$iku[$index]->realisasi}}</td>
                                         <td><a href="detailiku/{{$iku[$index]->ikuid}}" style="text-decoration: none; color: white">{{$iku[$index]->keterangan}}</a></td>
                                         <td>
                                            <a class="btn btn-primary" href="editiku/{{$iku[$index]->ikuid}}" role="button">Edit</a>
                                            <form action="/deliku/{{$iku[$index]->ikuid}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger" name="del" id="del">Hapus</button>
                                            </form>
                                        </td>
                                     @empty
                                         <td>kosong</td>
                                     @endforelse
                                    </tr>
                                </tbody>
                                
                            </table>
                            {{$iku->withQueryString()->links()}}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')