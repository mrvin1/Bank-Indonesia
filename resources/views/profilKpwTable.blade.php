@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Tabel Profil KPw</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/bipwt.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 80%">
    <div class="blur" style="background: rgba(211, 173, 212, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <div class="row" style="padding: 3%; flex-direction: row" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h1>Pegawai Organik</h1>
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                            </tr>
                            </thead>
                            <tbody>
                                 @forelse ($organik as $index => $value)
                                 <tr>
                                     <td>{{$organik[$index]->nip}}</td>
                                     <td>{{$organik[$index]->nama}}</td>
                                     <td>{{$organik[$index]->jeniskelamin}}</td>
                                 @empty
                                     <td>kosong</td>
                                 @endforelse
                                </tr>
                            </tbody>
                        </table>
                        {{$organik->links()}} 
                        <h5>Total pegawai organik: {{$corganik}} orang</h5>
                        </div>

                        <div class="col">
                            <h1>Pegawai Non-Organik</h1>
                            <table class="table table-striped table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                </tr>
                                </thead>
                                <tbody>
                                     @forelse ($nonorganik as $index => $value)
                                     <tr>
                                         <td>{{$nonorganik[$index]->nip}}</td>
                                         <td>{{$nonorganik[$index]->nama}}</td>
                                         <td>{{$nonorganik[$index]->jeniskelamin}}</td>
                                     @empty
                                         <td>kosong</td>
                                     @endforelse
                                    </tr>
                                </tbody>
                                
                            </table>
                            {{$nonorganik->links()}}
                            <h5>Total pegawai non-organik: {{$cnonorganik}} orang</h5>
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>
@include('layouts.footer')