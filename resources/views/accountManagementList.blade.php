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
        <div class="b" style="display: inline-block;position: absolute;right: 0px;width: 300px;">
            <a class="btn btn-success" href="{{route('addAccount')}}" role="button">Tambah</a>
        </div>
        <div class="row justify-content-end" style="padding: 2% 6%;" >
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
                            @forelse ($user as $index => $value )
                            <tr>
                                <td>{{$user[$index]->name}}</td>
                                <td>{{$user[$index]->nip}}</td>
                                <td>{{$user[$index]->role}}</td>
                                <td style="display: flex; padding: 1%; gap: 2%">
                                    <a class="btn btn-primary" href="/editaccount/{{$user[$index]->id}}" role="button" style="height: 40px">Edit</a>
                                    <form action="/delaccount/{{$user[$index]->id}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger" name="del" id="del">Hapus</button>
                                    </form>   
                                </td>
                            </tr>
                            @empty
                                <td>Tidak ada user</td>
                            @endforelse
                        </tr>
                        </tbody>
                    </table>
                    {{$user->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')