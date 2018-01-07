<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>SIM Pemetaan Passport Online</title>
    
    <link href="{{asset('landingpage/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('landingpage/css/coming-sssoon.css')}}" rel="stylesheet" />    
    
    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>

<div class="main" style="background-image: url({{URL::asset('landingpage/images/default.jpg') }} )">

<!--    Change the image source '/images/default.jpg' with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            Sistem informasi Pemetaan<br>Passport Online
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
    </div>
    <div class="content">
        <h4 class="motto"><a href="{{route('home')}}"><button class="btn btn-primary">Go To Main Page</button></a></h4>
    </div>
    <div class="footer">
      <div class="container">
          Copyright &copy; 2018 by <a href="http://kediri.imigrasi.go.id/">Kantor Imigrasi Kelas III Kediri</a>
      </div>
    </div>
 </div>
 </body>
   <script src="{{asset('landingpage/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
   <script src="{{asset('landingpage/js/bootstrap.min.js')}}" type="text/javascript"></script>

</html>