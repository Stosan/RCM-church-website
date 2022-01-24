@include('layouts.header')

<link rel="stylesheet" href="{{ asset('css/rdmr.css') }}">


</head>
<body>
@include('layouts.nav')
<div class="jumbotron">
  
    <div id="black"></div>

  </div>
  
  <!-- Section: Blog -->
  <section class="carrier">
    <br>
      <div class="container-fluid mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-8">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="{{ URL::asset('asset/event.jpg') }}" alt="" class="img-responsive"/> </div>
                </div>
                <div class="entry-content">
                  <div class="entry-meta media no-bg no-border mt-15 pb-20">
                    <div class="entry-date media-left text-center flip bg-theme-colored  pr-15  pl-15">
                      <ul>

                        
                        <li class="font-16 text-white font-weight-600">27</li>
                        <li class="font-12 text-white text-uppercase">Mar</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0">
                          <a href="#">{{ ucfirst($post->title) }} </a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13">
                          <i class="fa fa-clock-o mr-5 text-theme-colored"></i> 
                          {{ ucfirst($post->created_at) }}                     </span>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13">
                          <i class="fa fa-bookmark mr-5 text-theme-colored"></i> 
                            by {{ $post->user_id }}                     </span>
                      </div>
                    </div>
                  </div>

                  <div class="content"> 
                      <p class="mb-15">{!! $post->body !!}</p>
                  </div>
                        
                 

              <!--     <div class="mt-30 mb-0">
                    <h5 class="pull-left mt-10 mr-20 text-theme-colored">Share:</h5>
                    <ul class="styled-icons icon-circled m-0">
                      <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                    </ul>
                  </div> -->
                </div>
              </article>
              <br>
             

            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h4 class="widget-title line-bottom">Categories</h4>
                <div class="categories">
                  <ul class="list list-border angle-double-right">

                                     <li><a href="">General                      &nbsp;  <span class="badge badge-light"> </span></a></li>

                                      <li><a href="">Faith                      &nbsp;  <span class="badge badge-light"> </span></a></li>

                                      <li><a href="">Praise                      &nbsp;  <span class="badge badge-light"> </span></a></li>

                                      <li><a href="">Worship                      &nbsp;  <span class="badge badge-light"> </span></a></li>

                                    
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title line-bottom">Recent Messages</h4>
                <div class="latest-posts">

                

                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="">
                      <img src="" width="75" height="90"  class="img-responsive"/></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href=""></a></h5>
                    </div>
                  </article>

              

                </div>
              </div>
            </div>
          </div>
        </div>
      </div></div>
</div>
    </section>



@include('layouts.footer')