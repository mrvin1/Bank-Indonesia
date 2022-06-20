@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Detil IKU</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/mountain.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100vh">
    <div class="blur" style="background: rgba(235, 201, 201, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <div class="cnt" style="padding: 2% 10% 2% 10%; font-size: 18px; font-family: Arial, Helvetica, sans-serif ">
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Rincian IKU</h1>

                <tr>
                    <a class="btn btn-dark" href="/editiku/{{$iku->ikuid}}" role="button" style="display:flex; flex-direction: row; width: 150px; margin-left: auto">Edit IKU</a>
                </tr>                
                <tr>
                    <td>
                        <label for="password-confirm">Periode: </label>
                        {{date('d-m-Y', strtotime($iku->periode));}}&emsp;
                    </td> <br>
                    <td>
                        <label for="password-confirm">Tanggal Update: </label>
                        {{$iku->updated_at}}
                    </td><br>
                    <td>
                        <label for="password-confirm">Jenis IKU: </label>
                        {{$jenis->jenisdesc}}
                    </td><br>
                    <td>
                        <label for="password-confirm">Pengubah: </label>
                        {{$iku->name}}
                    </td><br>
                    
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Indikator: </label>
                    {{$jenis->indikatordesc}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Realisasi: </label>
                    {{$iku->realisasi}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Status: </label>
                    {{$iku->status}}
                </tr>
                <hr style="border-width: 1px; border-color: black">
                <tr>
                    <label for="password-confirm">Keterangan: </label>
                    {{$iku->keterangan}}
                </tr>                
        </div>
        
    </div>   
</div>
@extends('layouts.footer')