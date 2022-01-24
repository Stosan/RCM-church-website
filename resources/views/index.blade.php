
@include('layouts.header')

<link rel="stylesheet" href="{{ asset('css/flickity.css') }}">
<link rel="stylesheet" href="{{ asset('css/ind.css') }}">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">
<link rel="stylesheet" href="{{ asset('css/query.css') }}">


</head>
<body>
@include('layouts.nav')



<div class="container-fluid sliholder" >
  <div class="Modern-Slider">
      <!-- Item -->
      <div class="item">
        <div class="img-fill">
          <img src="./asset/slider1.jpg" alt="">
          <div class="info">
            <div>
              <h3>Believers Coming together</h3>
              <h5>We gather, We intercede, We pray.</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- // Item -->
    
      <!-- Item -->
      <div class="item">
        <div class="img-fill">
          <img src="./asset/slider2.jpg" alt="">
          <div class="info">
            <div>
              <h3>Driven by faith</h3>
              <h5>For faith comes not but by hearing the word of God... Romans 10 vs 17</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- // Item -->
      <!-- Item -->
      <div class="item">
        <div class="img-fill">
          <img src="./asset/slider3.jpg" alt="">
          <div class="info">
            <div>
              <h3>Rooted in the word</h3>
              <h5>Immersion in his word, is the most effective way we can be rooted in Christ Jesus</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- // Item -->
    </div>
</div>

<div class="sectionA1">
<div class="sectionwrapper" >
<h3>Live now:</h3>
  <h5 class="ellipsis">Event ongoing...</h5>
  <a href="/streaming" role="button" class="A1_btn" >Join in</a>
</div>
</div>
<div class="sectionA">
  <div class="sectionwrapper container-fluid" >
  
<div class="profile-card">
  <div class="profile-bio">
  <h3>Pastor's Message</h3>
    <p>“Neither height nor depth, nor anything else in all creation,
       will be able to separate us from the love of God that is in Christ Jesus our Lord.”

— Romans 8:39 (NIV)<br>

Sometimes we get caught up in our sin. We all have moments where our mistakes take control, where our hearts are weighed down with heaviness, when we feel so far away from God. But here’s the thing: God sees all of that. He sees our mess,
 our brokenness, our guilt. And He loves us anyway.
<br>
There will be moments when your faith falters, when you’re lonely or exhausted or just plain sad. There will be moments where grief grabs ahold of you and crumbles you to the ground, where all that you’ve believed feels empty, and when each breath feels like a chore. But in these moments, you will find redemption and power in His name. In these moments, if you choose to follow Him, He will guide you away from the heartbreak, the loneliness, the death, the loss, the toughest moments of your life, and back into His arms.
</p>

    <!-- some social links -->
    <ul class="profile-social-links">
     
      <li>
        <a href="#sectform" role="button" >
          Request a prayer
        </a>
      </li>
      <li>
        <a href="#connect" role="button">
          Connect with Us
        </a>
      </li>
   
    </ul>
  </div>
   <header>
    <!-- Profile -->
    <img src="./asset/pstwols.jpg" style="transform: scaleX(-1);">
    
    <h1>
      Wole Adesanya
    </h1>
    <h2>
      Team Lead, RCM
    </h2>
  </header>
  <!-- Bio -->
 

</div>
  </div>
  </div>
<div class="sectionB">
  
  <div class="sectionwrapper"> 
     <div class="divider-new" style="text-align:center;text-shadow:none;color:var(--font-color) ;background-color: var(--secondary-color);margin-bottom: -9px;padding: 8px 8px 8px 8px;">
    <h6 class="h5-responsive">Download refreshing sermon and join a growing community for believers</h6>
  </div>  
    <div id="slider-wrap">
      <ul id="slider">
         <li >
           <a href="#"><img src="./asset/2-slider (2).jpg" ></a>         
            <i class="fa fa-image"></i>
         </li>
         <li >
          <a href="#"><img src="./asset/2-slider.jpg" ></a>
                         
           <i class="fa fa-image"></i>
        </li>
        
        <li >
          <a href="#"><img src="./asset/giving.jpg" ></a>
                         
           <i class="fa fa-image"></i>
        </li>
         
      </ul>
      
       <!--controls-->
      <div class="btns" id="next"><i class="material-icons icon_slide">arrow_right</i></div>
      <div class="btns" id="previous"><i class="material-icons icon_slide">arrow_left</i></div>
  <!--   <div id="counter"></div>controls--> 
     
      
       
             
  </div>
  <div id="pagination-wrap">
        <ul>
        </ul> 
      </div> 

  </div>
  </div>
  <br>
  <div class="sectionB2">
    <div class="sectionwrapper" >
    <div class="mainCard">
      <div class="mainCardHeader"><h5>Activities & Live Stream</h5></div>
      <div class="mainCardContent">
        <div class="miniCard miniCardx" >
          <div class="panel panel-calendar left">
            <div class="header">
              <div class="title">Upcoming Conference</div>
              <div class="date">2021</div>
            </div>
           <img style="margin-top: 2px;" src="./asset/dare to believe.png">
          </div>
        </div>
        <div class="miniCard" >
          <div class="panel panel-calendar left">
            <div class="header">
              <div class="title">Prayer Times</div>
              <div class="date"><?php echo date("F jS, Y") . "<br>";?></div>
            </div>
            <ul>
              <li>
                <a href="">
                  <div class="time">9:00 - 10:00 GMT</div>
                <div class="title">Monday</div>
                </a>
                
              </li>
              <li>
                <a href="">
                  <div class="time">9:00 - 10:00 GMT</div>
                <div class="title">Tuesday</div>
                </a>
                
              </li> <li>
                <a href="">
                  <div class="time">9:00 - 10:00 GMT</div>
                <div class="title">Wednesday</div>
                </a>
                
              </li> <li>
                <a href="">
                  <div class="time">9:00 - 10:00 GMT</div>
                <div class="title">Thursday</div>
                </a>
                
              </li> <li>
                <a href="">
                  <div class="time">6:00 - 7:00 GMT</div>
                <div class="title">Worship on IG</div>
                </a>
                
              </li>
            </ul>
          </div>
        </div>
    </div>
  </div>

  </div>
</div>
<div class="sectionX">
  
  <div class="book-store">
<div class="divider-new" style="text-align:center;text-shadow:none;color:var(--font-color) ;background-color: var(--secondary-color);margin-bottom: -9px;padding: 8px 8px 8px 8px;">
    <h6 class="h5-responsive">Download refreshing sermon and join a growing community for believers</h6>
  </div> 
  <br>
    <div class="book-slide">
     <div class="book js-flickity" data-flickity-options='{ "wrapAround": true }'>
      <div class="book-cell">
       <div class="book-img">
        <img src="https://images-na.ssl-images-amazon.com/images/I/81WcnNQ-TBL.jpg" alt="" class="book-photo">
       </div>
       <div class="book-content">
        <div class="book-title">Test</div>
        <div class="book-author">by Wole Adesanya</div>
        <div class="rate">
         <fieldset class="rating">
          <input type="checkbox" id="star5" name="rating" value="5" />
          <label class="full" for="star5"></label>
          <input type="checkbox" id="star4" name="rating" value="4" />
          <label class="full" for="star4"></label>
          <input type="checkbox" id="star3" name="rating" value="3" />
          <label class="full" for="star3"></label>
          <input type="checkbox" id="star2" name="rating" value="2" />
          <label class="full" for="star2"></label>
          <input type="checkbox" id="star1" name="rating" value="1" />
          <label class="full" for="star1"></label>
         </fieldset>
         <span class="book-voters">1.987 downloads</span>
        </div>
        <div class="book-sum">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, quas! </div>
        <div class="book-see">See The message</div>
       </div>
      </div>
    </div>
   </div>
</div>
<br>



<div class="sectionB3 container-fluid">
<div id="black"></div>
<div class="row">
  <div class="col-sm-6 barrt" id="sectform">
    <h4>Let us pray with you</h4>
    <br>
    <p>- New to Salvation</p>
    <p>- First timer with us</p>
    <p>Fill this form, let's keep praying with you</p>
  </div>
 <div class="col-sm-6 formct">
<div class="frame">

 <div ng-app ng-init="checked = false">
   <form  class="form-req" action="" method="post" name="form">
     <label for="username">Fullname</label>
     <input class="form-styling" type="text" name="username" placeholder="" required/>
     <label for="password">Phone number</label>
     <input class="form-styling" type="text" name="password" placeholder="" required/>
     <label for="username">Home address</label>
     <input class="form-styling" type="text" name="username" placeholder="" required/>
     <label for="username">E-mail</label>
     <input class="form-styling" type="text" name="username" placeholder="" required/>
     <label for="username">Prayer Request</label>
     <textarea required class="form-styling" rows="1" cols="1" style="height:200px;padding-top:0;background: #fff;"></textarea>
    
     <div class="btn-animate">
       <a class="btn-req" id="submt" onclick="">Submit</a>
     </div>
           </form>

           <div class="nxtstp" id="nxtstp">
             <br>     <br>     <br>     <br>     <br>     <br>
            <h5>Thank you for taking this step!</h5>
             <h5><a href="#"><i class="fa fa-download">&nbsp;Download our Bulletin</i></a></h5>
             
             <h6>A partner will call to pray with you soon</h6>
           </div>
           <script>
            document.getElementById("submt").addEventListener("click", myFunction);
            
            function myFunction() {
   var respon = document.getElementById("nxtstp");
   
   var mform = document.getElementById("sectform");
   respon.classList.add("nxtstp_show");
   mform.classList.add("hider");
}
            </script>
</div>
 

</div>
</div>
</div>
</div></div>











@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>

<script  src="{{ asset('js/slider.js')}}"></script>
<script  src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/form.js')}}"></script>
<script  src="{{ asset('js/banner.js')}}"></script>

</body>
</html>
