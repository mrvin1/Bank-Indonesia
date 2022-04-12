@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Detil Bebarengan</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/meeting.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 120vh">
    <div class="blur" style="background: rgba(213, 210, 198, 0.55); backdrop-filter: blur(4px);height: 100%;width: 100%;">
        <div class="cnt" style="padding: 2% 10% 2% 10%; font-size: 18px; font-family: Arial, Helvetica, sans-serif">
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Detil Bebarengan</h1>
                <tr>
                    <a class="btn btn-dark" href="/editbebarengan/{{$bebarengan->id}}" role="button" style="display:flex; flex-direction: row; width: 150px; margin-left: auto">Edit Bebarengan</a>
                </tr>                
                <tr>
                    <label for="password-confirm">Tanggal: </label>
                    {{date('d-m-Y', strtotime($bebarengan->tanggalrapat));}}&emsp;
                    <label for="password-confirm">Lokasi: </label>
                    {{$bebarengan->lokasi}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Judul Rapat: </label>
                    {{$bebarengan->judul}} &emsp; &emsp;
                    <label for="password-confirm">Pembicara: </label>
                    {{$bebarengan->nama}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Tujuan: </label>
                    {{$bebarengan->tujuan}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Notulen: </label>
                    {{$bebarengan->notulen}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Kesimpulan: </label>
                    {{$bebarengan->kesimpulan}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">File: </label>
                    <a href={{asset('storage/bebarengan/'.$bebarengan->file1)}}>{{$bebarengan->file1}}</a> &emsp;
                    <a href={{asset('storage/bebarengan/'.$bebarengan->file2)}}>{{$bebarengan->file2}}</a> &emsp;
                    <a href={{asset('storage/bebarengan/'.$bebarengan->file3)}}>{{$bebarengan->file3}}</a> &emsp;
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Link Lampiran: </label>
                    {{$bebarengan->linklampiran}}
                </tr>
        </div>
        
    </div>   
</div>
@extends('layouts.footer')