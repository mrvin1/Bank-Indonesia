@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Tambah COE</title>
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
<div class="content"style="background-image: url('{{Storage::url('assetsweb/coe.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 110%">
    <div class="blur" style="background: rgba(235, 238, 192, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        <div class="cnt" style="padding-left: 4% ">
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Tambah COE</h1>
            <form action="" method="POST" style="padding: 0 20%" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Tanggal: </label>
                        <input type="datetime-local" name="tanggal" id="tanggal">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">S/D: </label>
                      <input type="datetime-local" name="sd" id="sd">
                    </div>
                </div>               
                <div class="form-group">
                    <label for="password-confirm">Aktivitas</label>
                    <textarea class="form-control" rows="3" name="aktivitas" id="aktivitas"></textarea>
                </div>
                <div class="form-group">
                    <label for="password-confirm">Ditunjukkan ke</label>
                    <select name="ditunjukkan" id="ditunjukkan">
                        @forelse ( $user as $idx => $value )
                            <option value="{{$user[$idx]->email}}">{{$user[$idx]->email}}</option>
                        @empty
                            <option value=""></option>
                        @endforelse
                    </select>
                </div>
                <div class="form-group">
                    <label for="password-confirm">Keterangan</label>
                    <textarea class="form-control" rows="3" name="ket" id="ket"></textarea>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                      <label for="inputEmail4">File (Max 3): </label>
                        <input type="file" name="file1" id="file1" style="max-width: 200px">
                    </div>
                    <div class="form-group">
                          <input type="file" name="file2" id="file2" style="max-width: 200px">
                    </div>
                    <div class="form-group">
                        <input type="file" name="file3" id="file3" style="max-width: 200px">
                  </div>
                </div>
                <div class="form-group">
                    <label for="password-confirm">Link lampiran:</label>
                    <textarea class="form-control" rows="1" name="link" id="link"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>   
</div>
@include('layouts.footer')