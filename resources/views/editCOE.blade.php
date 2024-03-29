@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Edit COE</title>
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
                <h1 style="text-align: center; padding-top: 2%; padding-bottom: 3%">Edit COE</h1>
            <form action="" method="POST" style="padding: 0 20%" enctype= multipart/form-data>
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Tanggal: </label>
                        <input type="datetime-local" name="tanggal" id="tanggal" required value=<?php echo date('Y-m-d\TH:i', strtotime($detil->start)); ?>>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">S/D: </label>
                      <input type="datetime-local" name="sd" id="sd" required value=<?php echo date('Y-m-d\TH:i', strtotime($detil->end)); ?>>
                    </div>
                </div>               
                <div class="form-group">
                    <label for="password-confirm">Aktivitas</label>
                    <textarea class="form-control" rows="3" name="aktivitas" id="aktivitas" required> {{$detil->title}}</textarea>
                </div>
                <div class="form-group">
                    <label for="password-confirm">Ditunjukkan ke</label>
                    <select name="ditunjukkan" id="ditunjukkan" required>
                        <option value="{{$detil->email}}">{{$detil->email}}</option>
                        @forelse ( $email as $index => $value )
                            <option value="{{$email[$index]->email}}">{{$email[$index]->email}}</option>
                        @empty
                            <option value=""></option>
                        @endforelse
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="password-confirm">Keterangan</label>
                    <textarea class="form-control" rows="3" name="ket" id="ket" required>{{$detil->keterangan}}</textarea>
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
                    <a href={{asset('storage/coe/'.$detil->file1)}}>{{$detil->file1}}</a> &emsp;
                    <a href={{asset('storage/coe/'.$detil->file2)}}>{{$detil->file2}}</a> &emsp;
                    <a href={{asset('storage/coe/'.$detil->file3)}}>{{$detil->file3}}</a> &emsp;
                </div>
                <div class="form-group">
                    <label for="password-confirm">Link lampiran:</label>
                    <textarea class="form-control" rows="1" name="link" id="link" required>{{$detil->linklampiran}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>   
</div>
@include('layouts.footer')