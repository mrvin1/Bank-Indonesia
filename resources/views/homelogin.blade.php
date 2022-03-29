@extends('layouts.masterlay')
@include('layouts.navigation')

<style>
body{
    background: #eee;
}
span{
    font-size:15px;
}
a{
  text-decoration:none; 
  color: #0062cc;
}
.box{
    padding:5px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:10px 60px;
    /* margin:30px 0px; */
}
.text{
    margin:20px 0px;
}

.fa{
     color:#4183D7;
}



</style>
<title>Home</title>

<div class="content" style="background-image: url('{{Storage::url('assetsweb/bipwt.jpg')}}'); background-size: 100%; backdrop-filter: blur(20px);height: 110%; width: 100%;">
    <div class="blur" style="background: rgba(237, 205, 187, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="border-color: white; display: flex; justify-content: center; padding-top: 2%;padding-bottom: 2%">Selamat Datang Pengguna 1</h1>
        <div class="box">
            <div class="container">
                <div class="card-deck">
                    <div class="row">
                            <div class="card">
                                <a href="{{route('viewMenuWil')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/map.png')}}" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="card-title">Profil Wilayah Kerja</h5>
                                </div>
                            </div>
                        <div class="card">
                            <a href="{{route('viewMenuKpw')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/building.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">Profil Kpw. Purwokerto</h5>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{route('listIKU')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/running.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">IKU</h5>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{route('viewCOE')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/calendar.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">Calendar of Event - COE</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 2%">
                        <div class="card">
                            <a href="{{route('viewBebarengan')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/meeting.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">Bebarengan</h5>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{route('changePassword')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/key-chain.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">Ganti Password</h5>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{route('accountManager')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/skills.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">Manajemen Akun</h5>
                            </div>
                        </div>
                        <div class="card">
                            <a href="{{route('logout')}}"><img class="card-img-top" src="{{Storage::url('assetsweb/exit.png')}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title">Keluar</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>

@include('layouts.footer')