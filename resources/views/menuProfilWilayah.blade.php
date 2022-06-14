@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Profil Wilayah Kerja</title>
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
		<div class="bg" style="background-color: rgb(166, 221, 184)">

		
        <h1 style="text-align: center; padding: 3% 0">Profil Wilayah Kerja PDRB</h1>
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 12%;"><br>
        <div class="satu" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Silahkan input data: </h2><br>
            <button type="button" class="btn btn-primary mr-5" style="width: 150px" data-toggle="modal" data-target="#lapanganusaha">Lapangan Usaha</button> <br>
			<button type="button" class="btn btn-danger mr-5" style="width: 150px" data-toggle="modal" data-target="#pengeluaran">Pengeluaran</button> <br>
            <!-- Import Excel -->
		</div>
		<div class="modal fade" id="lapanganusaha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form method="post" action="{{route('updatelu')}}" enctype="multipart/form-data">
					
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Masukkan data lapangan usaha dalam persentase</h5>
						</div>
						<div class="modal-body">
							{{ csrf_field() }}
                            <div class="form-group">
                                <label for="password-confirm">Wilayah/Kabupaten:</label>
                                <div class="col-md-6">
                                    <select name="wil" id="wil" required>
                                        <option value=""></option>
										<option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Banyumas">Banyumas</option>
                                        <option value="Banjarnegara">Banjarnegara</option>
                                        <option value="Cilacap">Cilacap</option>
                                        <option value="Purbalingga">Purbalingga</option>
                                    </select>
                                </div>
                            </div>
								<div class="form-group">
									<label for="password-confirm">Industri Pengolahan:</label>
									<div class="col-md-6">
										<input id="pengolahan" type="number" step="any" class="form-control" name="pengolahan" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<label for="password-confirm">Perdagangan:</label>
									<div class="col-md-6">
										<input id="perdagangan" type="number" step="any" class="form-control" name="perdagangan" required autofocus>
									</div>
								</div> 
                                <div class="form-group">
									<label for="password-confirm">Pertanian:</label>
									<div class="col-md-6">
										<input id="pertanian" type="number" step="any" class="form-control" name="pertanian" required autofocus>
									</div>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Konstruksi:</label>
									<div class="col-md-6">
										<input id="konstruksi" type="number" step="any" class="form-control" name="konstruksi" required autofocus>
									</div>
								</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Masukkan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
    </div>
		{{-- masukkan data manual --}}
		<div class="modal fade" id="pengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<form method="post" action="{{route('updatePengeluaran')}}" enctype="multipart/form-data">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Pengeluaran dalam persentase</h5>
						</div>
						<div class="modal-body">
							{{ csrf_field() }}
                            <div class="form-group">
                                <label for="password-confirm">Wilayah/Kabupaten:</label>
                                <div class="col-md-6">
                                    <select name="wila" id="wila" required>
                                        <option value=""></option>
										<option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Banyumas">Banyumas</option>
                                        <option value="Banjarnegara">Banjarnegara</option>
                                        <option value="Cilacap">Cilacap</option>
                                        <option value="Purbalingga">Purbalingga</option>
                                    </select>
                                </div>
                            </div>
								
								<div class="form-group">
									<label for="password-confirm">Pengeluaran Konsumsi Rumah tangga</label>
									<div class="col-md-6">
										<input id="rt" type="number" step="any" class="form-control" name="rt" required autofocus>
									</div>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Pengeluaran Konsumsi LNPRT</label>
									<div class="col-md-6">
										<input id="lnprt" type="number" step="any" class="form-control" name="lnprt" required autofocus>
									</div>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Pengeluaran Konsumsi Pemerintah</label>
									<div class="col-md-6">
										<input id="pemerintah" type="number" step="any" class="form-control" name="pemerintah" required autofocus>
									</div>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Pembentukan Modal Tetap Bruto</label>
									<div class="col-md-6">
										<input id="bruto" type="number" step="any" class="form-control" name="bruto" required autofocus>
									</div>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Perubahan inventori</label>
									<div class="col-md-6">
										<input id="inventori" type="number" step="any" class="form-control" name="inventori" required autofocus>
									</div>
								</div>
                                <div class="form-group">
									<label for="password-confirm">Net Ekspor Barang dan Jasa</label>
									<div class="col-md-6">
										<input id="bj" type="number" step="any" class="form-control" name="bj" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<label for="password-confirm">PRODUK DOMESTIK REGIONAL BRUTO (PDRB)</label>
									<div class="col-md-6">
										<input id="pdrb" type="number" step="any" class="form-control" name="pdrb" required autofocus>
									</div>
								</div>
 
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Masukkan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="bg" style="background-color: rgb(166, 221, 184)">
        <hr class="solid" style=" border-top: 4px solid rgb(0, 0, 0); margin: 0 20%;"><br>
        <div class="dua" style="display: flex;justify-content: center;align-items: center;height: 200px; flex-direction: column">
            <h2>Lihat Laporan: </h2><br>
            <a href="{{Route('viewDiagramWillu')}}"><button type="submit" class="btn btn-primary mr-5"  style="width: 150px">Lapangan Usaha</button></a> <br>
            <a href="{{Route('viewDiagramWilPengeluaran')}}"><button type="submit" class="btn btn-danger mr-5" style="width: 150px">Pengeluaran</button></a>
        </div>
	</div>
	
@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
            $(document).ready(function() {
            $('#wil').on('change', function() {
               var wilayah = $(this).val();
			   
               if(wilayah) {
                   $.ajax({
                       url: 'getlu/'+wilayah,
                       type: "GET",
                       dataType: "json",
                       success:function(data)
                       {
							if(data){
								$('#pengolahan').val(data.industripengolahan)
								$('#perdagangan').val(data.perdagangan)
								$('#pertanian').val(data.pertanian)
								$('#konstruksi').val(data.konstruksi)								
                     		}
                   		}
               
            });
		}
            });
		});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
            $(document).ready(function() {
            $('#wila').on('change', function() {
               var wilayah = $(this).val();
			   
               if(wilayah) {
                   $.ajax({
                       url: 'getpengeluaran/'+wilayah,
                       type: "GET",
                       dataType: "json",
                       success:function(data)
                       {
							if(data){
								$('#rt').val(data.rumahtangga)
								$('#lnprt').val(data.lnprt)
								$('#pemerintah').val(data.pemerintah)
								$('#bruto').val(data.bruto)
								$('#inventori').val(data.inventori)
								$('#bj').val(data.eksporbarangjasa)
								$('#pdrb').val(data.pdrb)
								
                     		}
                   		}
               
            });
		}
            });
		});
</script>