@include('layouts.header')

<link rel="stylesheet" href="{{ asset('css/aud.css') }}">


</head>
<body>
@include('layouts.nav')
<style>
.show{
  display:inline
}
.hide{
  display:none
}.hidden{
  display:none;visibility:collapse
}

</style>
<div class="jumbotron">
  
    <div id="black"></div>
    <div style="" class="animated fadeInDown">
      <div class="container-fluid">
        <div class="col-md-5 col-md-offset-1">
          <br>  <br>  <br>  <br>  <br>
        <h3>Revealing Christ<br class="visible-lg "/> Audio message store</h1>
        <hr style="width:25%;text-align:left;margin:30px 0; border:2.5px solid #fff;"/>
        </div>
       
  
      </div>
    </div>
  </div>
  
  <div class="divider-new" style="background-color: var(--secondary-color);margin-bottom: -9px;padding: 8px 8px 8px 8px;">
    <h6 class="h5-responsive">Refreshing messages</h6>
  </div>
<div class="sectionA" >
  <div class="container-fluid" style="padding: 0;">
      <!--Carousel Wrapper-->
      <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-1z" data-slide-to="1"></li>
          <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          
          <!--First slide-->
          <div class="carousel-item active">
            <img src="./asset/WAFBEC-messages-banner.png" alt="First slide">
            <div class="carousel-caption">
              <h4></h4>
              <br>
            </div>
          </div>
          <!--/First slide-->
          <!--Second slide-->
          <div class="carousel-item">
            <img src="./asset/WAFBEC2.png" alt="Second slide">
            <div class="carousel-caption">
              <h4></h4>
              <br>
            </div>
          </div>
          <!--/Second slide-->
          <!--Third slide-->
          <div class="carousel-item">
            <img src="./asset/WAFBEC-messages-banner.png" alt="Third slide">
            <div class="carousel-caption">
              <h4></h4>
              <br>
            </div>
          </div>
          <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a  class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--/.Carousel Wrapper-->
    </div>
</div>
<div class="sectionB">
        <!--Main layout-->
        <div class="container-fluid ">
          <div class="row">
            <!--Sidebar-->
            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.2s">
     
              <div class="widget-wrapper">
                <h6 style="text-shadow: 2px 2px 5px rgb(190, 190, 190);">Collections:</h6>
                <br>
                <div class="list-group">
                  <a href="#" class="list-group-item active">Power</a>
                  <a href="#" class="list-group-item">Grace</a>
                  <a href="#" class="list-group-item">Revelation of Jesus</a>
                  <a href="#" class="list-group-item">Everyday living</a>
                  <a href="#" class="list-group-item">Gods People</a>
                  <a href="#" class="list-group-item">Free Messages</a>
                </div>
              </div>
      
              <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                <h4>Subscription form:</h4>
                <br>
                <div class="card">
                  <div class="card-block">
                    <p><strong>Subscribe to our newsletter</strong></p>
                    <p>Once a week we will send you a summary of the most useful news</p>
                    <div class="md-form">
                      <i class="fa fa-user prefix"></i>
                      <input type="text" id="form1" class="form-control">
                      <label for="form1">Your name</label>
                    </div>
                    <div class="md-form">
                      <i class="fa fa-envelope prefix"></i>
                      <input type="text" id="form2" class="form-control">
                      <label for="form2">Your email</label>
                    </div>
                    <button class="btn btn-default">Submit</button>
      
                  </div>
                </div>
              </div>
      
            </div>
            <!--/.Sidebar-->
      
            <!--Main column-->
            <div class="col-sm-7 cardhol">
            
              <div class="card  wow fadeIn" data-wow-delay="0.2s">
                <div class="main_card">
                <!--Card image-->
                <div class="view overlay hm-white-slight" style="overflow: hidden;">
                  <img src="./asset/flyer1.jpg" class="img-fluid" alt="">
                  <a href="#">
                    <div class="mask"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block">
                <div id="plattrk">{{ asset('/Audio_messages_library/09 what can i do.m4a') }}</div>
                  <a ><i class="material-icons  basket">shopping_cart</i></a>
                  <a class="play"><i class="material-icons  basket" id="play-icon">play_circle</i></a>
                  <a  class="pause hide"><i class="material-icons  basket" id="play-icon">pause_circle</i></a>
                   <a class="pay"><i class="material-icons  basket">payment</i></a>
                </div>
                </div>
                <div class="card_desc">
                  <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur esse delectus enim!</h4>
                </div>
              </div>
                <!--Third columnn-->
              </div> 
          
      
          </div>
  </div>


@include('layouts.footer')
  <script  src="{{ asset('js/aud_auto.js')}}"></script>