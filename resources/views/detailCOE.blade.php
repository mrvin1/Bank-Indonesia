@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Detil COE</title>
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
hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 30px solid rgba(0, 0, 0, 0);
}

</style>
<div class="content"style="background-image: url('{{Storage::url('assetsweb/coe.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(242, 243, 226, 0.55); backdrop-filter: blur(3px);height: 100%;width: 100%;">
        
        <div class="cnt" style="padding: 2% 10% 2% 10%; font-size: 18px; font-family: Arial, Helvetica, sans-serif ">
            <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Detil COE</h1>
            <tr>
                <a class="btn btn-dark" href="/editcoe/{{$detil->id}}" role="button" style="display:flex; flex-direction: row; width: 100px; margin-left: auto;">Edit COE</a>
            </tr>                
            <tr>
                <label for="password-confirm">Tanggal: </label>
                {{date('d-m-Y', strtotime($detil->start));}}&emsp;&emsp;
                <label for="password-confirm">Sampai: </label>
                {{date('d-m-Y', strtotime($detil->end));}}
            </tr>
            <hr style="border-width: 1px; border-color: black">
            <tr>
                <label for="password-confirm">Ditunjukkan ke: </label>
                {{$detil->email}}
            </tr>
            <hr style="border-width: 1px; border-color: black">
            <tr>
                <label for="password-confirm">Aktivitas: </label>
                {{$detil->title}}
            </tr>
            <hr style="border-width: 1px; border-color: black">
            <tr>
                <label for="password-confirm">Keterangan: </label>
                {{$detil->keterangan}}
            </tr>
    
            <hr style="border-width: 1px; border-color: black">
            <tr>
                <label for="password-confirm">File: </label>
                <a href={{asset('storage/coe/'.$detil->file1)}}>{{$detil->file1}}</a> &emsp;
                <a href={{asset('storage/coe/'.$detil->file2)}}>{{$detil->file2}}</a> &emsp;
                <a href={{asset('storage/coe/'.$detil->file3)}}>{{$detil->file3}}</a> &emsp;
            </tr>
            <hr style="border-width: 1px; border-color: black">
            <tr>
                <label for="password-confirm">Link Lampiran: </label>
                {{$detil->linklampiran}}
            </tr>
    </div>
        
        
    </div>   
</div>
@extends('layouts.footer')