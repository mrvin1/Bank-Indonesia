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


</style>
<div class="content"style="background-image: url('{{Storage::url('assetsweb/5870.jpg')}}'); background-size: 100%; background-repeat: no-repeat; backdrop-filter: blur(20px);height: 100%; width: 100%;">
    <div class="blur" style="background: rgba(255, 255, 255, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
    </div>
</div>
@include('layouts.footer')