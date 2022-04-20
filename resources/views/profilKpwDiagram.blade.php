@extends('layouts.masterlay')
@include('layouts.navigation')
<title>Diagram Profil KPw</title>
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
	
<div class="content"style="background-image: url('{{Storage::url('assetsweb/bipwt.jpg')}}'); background-size: 100%;  backdrop-filter: blur(20px); height: 80%">
    <div class="blur" style="background: rgba(211, 173, 212, 0.55); backdrop-filter: blur(2px);height: 100%;width: 100%;height: 100%;padding: 0;margin: 0;display: flex;align-items: center;justify-content: center;">
            <div id="pie_chart" style="width:750px; height:450px; " >

            </div>
                                  
            <script type="text/javascript">
                var analytics = <?php echo $course; ?>
        
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
        
                function drawChart()
                {
                    var data = google.visualization.arrayToDataTable(analytics);
                    var options = {
                        title : 'Diagram Pembagian Pegawai KPw Purwokerto'
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
                    chart.draw(data, options);
                }
            </script>
    </div>
</div>

@include('layouts.footer')