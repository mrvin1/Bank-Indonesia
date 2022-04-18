@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Diagram Profil KPw</title>
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
       

    </div>
</div>
@include('layouts.footer')