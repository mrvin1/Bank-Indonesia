@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Pengumuman</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/5870.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(255, 255, 255, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="text-align: center; padding-top: 2%;">Pemberitahuan</h1>
        <div class="row justify-content-end" style="padding: 5%;" >
            <div class="col-md">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Jatuh Tempo</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($agenda as $index => $value)
                            <tr>
                                <td>
                                    {{$index+1}}
                                </td>
                                <td>
                                    <a href="/detailcoe/{{$agenda[$index]->id}}" id="" value= $index>
                                    {{$agenda[$index]->aktivitas}}
                                </td>
                                <td>
                                    {{$agenda[$index]->deadline}}</a>
                                </td>
                                
                            </tr>
                            @empty
                            <tr >
                                <td>Tidak ada pemberitahuan</td>
                            </tr>
                        @endforelse 
                        </tbody>
                        {{$agenda->links()}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')