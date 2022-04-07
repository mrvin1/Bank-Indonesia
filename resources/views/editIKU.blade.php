@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Edit IKU</title>
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
    <div class="blur" style="background: rgba(240, 145, 145, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <div class="cnt" style="padding-left: 4% ">
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Edit IKU</h1>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Periode</label>
                    <input type="date" name="periode" id="periode" value="{{$iku->periode}}" required>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Jenis IKU</label>
                    <select name="jenisiku" id="jenisiku" required>
                        <option value="{{$jenis->id}}">{{$jenis->jenisdesc}}</option>
                        <option value="1">IKU Implementasi</option>
                        <option value="2">IKU Rekomendasi</option>
                        <option value="3">IKU Asesmen</option>
                        <option value="4">IKU Data/ Informasi</option>
                        <option value="5">IKU Manajemen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Indikator</label>
                    <select name="indikator" id="indikator" required>
                        <option value="{{$jenis->indikator}}">{{$jenis->indikatordesc}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Realisasi</label>
                    <input type="text" name="realisasi" id="realisasi" value="{{$iku->realisasi}}" required>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Status</label>
                    <input type="radio" name="track" id="track" value="On Track" @if ($iku->status=="On Track") checked="checked"@endif>
                    <label for="Ontrack">   On-Track</label>
                    <input type="radio" name="track" id="track" value="Off Track" @if ($iku->status=="Off Track") checked="checked"@endif>
                    <label for="Offtrack">  Off-Track</label>
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Keterangan</label>
                    <textarea name="ket" id="ket" cols="45" rows="5" required>{{$iku->keterangan}}</textarea>
                </div>
                <div class="form-group"  style="display: block; margin-left: 50%;margin-right: auto;width: 40%;">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        
    </div>   
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
            $('#jenisiku').on('change', function() {
               var jenisiku = $(this).val();
               if(jenisiku) {
                   $.ajax({
                       url: '/getindikator/'+jenisiku,
                       type: "GET",
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#indikator').empty();
                            $('#indikator').append('<option hidden>Pilih Indikator</option>'); 
                            $.each(data, function(key, indikatordesc){
                                $('select[name="indikator"]').append('<option value="'+indikatordesc.id +'">' + indikatordesc.indikatordesc+ '</option>');
                            });
                        }else{
                            $('#indikator').empty();
                        }
                     }
                   });
               }else{
                 $('#indikator').empty();
               }
            });
            });
</script>
@extends('layouts.footer')