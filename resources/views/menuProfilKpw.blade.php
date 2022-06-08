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
        @if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert"></button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
		<div class="bg" style="background-color: rgb(221, 209, 166)">

		
        <h1 style="text-align: center; padding: 3% 0">Profil BI Kpw Purwokerto</h1>
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 12%;"><br>
        <div class="satu" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Silahkan Upload File .xlsx: </h2><br>
            <button type="button" class="btn btn-primary mr-5" style="width: 150px" data-toggle="modal" data-target="#importExcel">Upload File</button> <br>
			<button type="button" class="btn btn-danger mr-5" style="width: 200px" data-toggle="modal" data-target="#inputManual">Masukkan Data Manual</button> <br>
            <!-- Import Excel -->
		</div>
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form method="post" action="import_excel" enctype="multipart/form-data">
					
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

		{{-- masukkan data manual --}}
		<div class="modal fade" id="inputManual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form method="post" action="{{route('insertkpw')}}" enctype="multipart/form-data">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Silahkan Masukkan Data Manual</h5>
						</div>
						<div class="modal-body">
							{{ csrf_field() }}
								<div class="form-group">
									<label for="password-confirm">NIP:</label>
									<div class="col-md-6">
										<input id="nip" type="text" class="form-control" name="nip" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<label for="password-confirm">Nama:</label>
									<div class="col-md-6">
										<input id="nama" type="text" class="form-control" name="nama" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<label for="password-confirm">Status</label>
									<div class="col-md-6">
										<input type="radio" name="status" value="SINGLE"> Single
										<input type="radio" name="status" value="MENIKAH"> Menikah
									</div>
								</div>
								<div class="form-group">
									<label for="password-confirm">Unit Kerja:</label>
									<div class="col-md-6">
										<input id="unitkerja" type="text" class="form-control" name="unitkerja" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<label for="password-confirm">Status Pegawai:</label>
									<div class="col-md-6">
										<select name="kepegawaian" id="kepegawaian" required>
											<option value=""></option>
											<option value="ORGANIK">Organik</option>
											<option value="NON ORGANIK">Non Organik</option>
										</select>
									</div>
								</div>
							
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Masukkan</button>
						</div>
					</div>
				</form>
			</div>
		</div>




	</div>
	<div class="bg" style="background-color: rgb(221, 209, 166)">
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 20%;"><br>
        <div class="dua" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Lihat Laporan: </h2><br>
            <a href="{{Route('viewDiagramKpw')}}"><button type="submit" class="btn btn-success"  style="width: 150px">Dalam Diagram</button></a> <br>
            <a href="{{Route('viewTableKpw')}}"><button type="submit" class="btn btn-warning" style="width: 150px">Dalam Tabel</button></a>
        </div>
	</div>
	

@include('layouts.footer')