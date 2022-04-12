@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Profil BI Kpw Purwokerto</title>
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
    <div class="blur" style="background: rgba(229, 241, 173, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;">
        @if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
        <h1 style="text-align: center; padding: 3% 0">Profil BI Kpw Purwokerto</h1>
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 12%;"><br>
        <div class="satu" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Silahkan Upload File .xlsx: </h2><br>
            <button type="button" class="btn btn-primary mr-5" style="width: 150px" data-toggle="modal" data-target="#importExcel">Upload File</button> <br>
            <!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
        </div>
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 20%;"><br>
        <div class="dua" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Lihat Laporan: </h2><br>
            <button type="submit" class="btn btn-success"  style="width: 150px">Dalam Diagram</button> <br>
            <button type="submit" class="btn btn-warning" style="width: 150px">Dalam Tabel</button>
        </div>

    </div>
</div>

@include('layouts.footer')