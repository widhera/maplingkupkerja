@extends('layouts.master')
@section('title','SIM Pemetaan Passport Online | Home')
@section('additional_css')
    @include('mapperkota.base.head_mapperkota')
    <style type="text/css">
        #portfolio .portfolio-item .portfolio-link .caption {
            background: rgb(31, 164, 182);
        }
        .button-submit
        {
            text-align: right;
        }
        td{
            text-align: left;
        }
    </style>
@endsection
@section('content')
    <!-- Portfolio Grid Section -->
    <section id="maps" style="margin-top: 0px">
        <div id="map"></div>
    </section>
    <section id="graph" style="margin-top: 0px>
    
        <div class="container-fluidner">
            
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2>Data Grafik</h2>
                <hr class="star-primary">
                </div>
            </div>
            @include('layouts.flash_msg')
            <div class="row">
                <div class="container">
                     <div id="columnchart_material" style="width: 100%; height: 500px;">
                     </div>
                </div>
            </div>
               
        </div>
    </section>    
    
    </div>
@endsection
@section('additional_js')
@include('mapperkota.js_mapperkota')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        $("#loader").prop('disabled',true);
        runFunction();
        var t=setInterval(runFunction,10000);
        var a=1000;
        function runFunction(){
            a+=500
            
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
        }
      function drawChart() {
        var waktu= new Date().toLocaleTimeString();
        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'Kota Kediri', 'Kab Kediri', 'Kab Jombang', 'Kab Nganjuk'],
          ['2014', a, 400, 200, 150],
          ['2015', a+170, 460, 250, 200],
          ['2016', a-200, 1120, 300, 250],
          ['2017', a+100, 540, 350, 300]
        ]);

        var options = {
          chart: {
            title: 'Semua Wilayah Kerja',
            subtitle: 'Diperbaharui '+waktu,
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
@endsection