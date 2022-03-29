@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Tambah IKU</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/mountain.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 100%">
    <div class="blur" style="background: rgba(245, 243, 243, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <div class="cnt" style="padding-left: 4% ">
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Tambah IKU</h1>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Periode</label>
                    <input type="date" name="periode" id="periode">
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Jenis IKU</label>
                    <select name="jenisiku" id="jenisiku">
                        <option value=""></option>
                        <option value="">IKU Implementasi</option>
                        <option value="">IKU Rekomendasi</option>
                        <option value="">IKU Asesmen</option>
                        <option value="">IKU Data/ Informasi</option>
                        <option value="">IKU Manajemen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Indikator</label>
                    <select name="indikator" id="indikator">
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Realisasi</label>
                    <input type="text" name="realisasi" id="realisasi">
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Status</label>
                    <input type="radio" name="track" id="track" value="On-Track">
                    <label for="ontrack">   On-Track</label>
                    <input type="radio" name="track" id="track" value="Off-Track">
                    <label for="offtrack">  Off-Track</label>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Keterangan</label>
                    <textarea name="ket" id="ket" cols="45" rows="5"></textarea>
                </div>
                <div class="form-group"  style="display: block; margin-left: 50%;margin-right: auto;width: 40%;">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        
    </div>   
</div>
@extends('layouts.footer')