@extends('layouts.masterlay')
@include('layouts.navigation')
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<title>Diagram Profil Wilayah Lapangan Usaha</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <body>
    <h2 style="text-align: center;">Diagram Profil Wilayah Lapangan Usaha</h2>
    <div class="container-fluid p-5">
    <div id="barchart_material" style="width: 100%; height: 500px;"></div>
    </div>
   


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Wilayah', 'Industri Pengolahan', 'Perdagangan', 'Pertanian', 'Konstruksi'],

            @php
              foreach($lu as $luu) {
                  echo "['".$luu->wilayah."', ".$luu->industripengolahan.", ".$luu->perdagangan.",".$luu->pertanian.",".$luu->konstruksi."],";
              }
            @endphp
        ]);

        var options = {
          chart: {
            title: 'Pertumbuhan Lapangan Usaha',
            subtitle: 'Persentase',
          },
          bars: 'vertical'
        };
        var chart = new google.charts.Bar(document.getElementById('barchart_material'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

</body>
@include('layouts.footer')