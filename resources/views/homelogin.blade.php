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

<div class="content" style="background-image: url('{{Storage::url('assetsweb/bipwt.jpg')}}'); background-size: 100%; background-repeat: no-repeat; backdrop-filter: blur(20px);height: 100%; width: 100%;">
    <div class="blur" style="background: rgba(237, 205, 187, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <h1 style="border-color: white; display: flex; justify-content: center; padding-top: 2%;padding-bottom: 2%">Selamat Datang Pengguna 1</h1>
        <div class="box">
            <div class="container">
                 <div class="row">
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/map.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>Profil Wilayah Kerja</h4>
                                </div>                               
                             </div>
                        </div>	 
                        
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/building.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>Profil Kpw. Purwokerto</h4>
                                </div>                               
                             </div>
                        </div>
                        
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/running.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>IKU</h4>
                                </div>                               
                             </div>
                        </div>
                        
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/calendar.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>COE</h4>
                                </div>                               
                             </div>
                        </div>	 
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/meeting.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>Bebarengan</h4>
                                </div>                               
                             </div>
                        </div>	 
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/key-chain.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>Ganti Password</h4>
                                </div>                               
                             </div>
                        </div>	 
                        
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/skills.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>Manajemen Akun</h4>
                                </div>                               
                             </div>
                        </div>	 
                        
                        <div class="col">
                            <div class="box-part">
                                <div class="text">
                                    <span><img src="{{Storage::url('assetsweb/exit.png')}}" style="width: 100%; height: 30%; display: flex;"></span>
                                </div> 
                                <div class="title">
                                    <h4>Keluar</h4>
                                </div>                               
                             </div>
                        </div>	 
                
                </div>		
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')