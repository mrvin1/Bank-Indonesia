@include('navbar')

<div class="table-responsive-md" style="padding: 2%">
    <input class="btn btn-primary" type="button" value="Input">
    <table class="table">
        <caption>Dokumen Masuk</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">No Dokumen</th>
            <th scope="col">Tgl Dokumen</th>
            <th scope="col">Perihal</th>
            <th scope="col">Asal Dokumen</th>
            <th scope="col">Tanggal terima</th>
            <th scope="col">Tujuan Disposisi</th>
            <th scope="col">Petunjuk Disposisi</th>
            <th scope="col">Ket Disposisi Kepala</th>
            <th scope="col">Ket Disposisi Tim</th>
            <th scope="col">Ket Disposisi Unit</th>
            <th scope="col">File</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          
        </tbody>
    </table>
  </div>

  @include('layouts.footer')