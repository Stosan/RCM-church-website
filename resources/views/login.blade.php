
@include('layouts.header')

<link rel="stylesheet" href="{{ asset('css/liv.css') }}">


</head>
<body>
@include('layouts.nav')

<div class="jumbotron">
  
    <div id="black"></div>

  </div>
<style>
 
</style>
  <div class="container">
      <div class="row">
         
            <div class="card p-3 col-12">
                <div class="card-wrapper">
                    <div class="card-box">
                    <style>
                    iframe{
                        height:100%;
                        width:100%
                    }
                    </style>
                    <iframe src="https://www.youtube.com/embed/Db92TjUrNKI?controls=0" title="Live Stream" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><br>
                <div class="barr"><h5>Listen to Live Stream</h5></div> <br>
                <div class="bwbarr"><h5><i class="fa fa-share"></i>Share</h5>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-facebook"></i><i class="fa fa-twitter"></i></div>
            </div>
          </div>

      </div>
      
  </div>



      @include('layouts.footer')

</body>
</html>
