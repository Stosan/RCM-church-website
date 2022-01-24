
@include('layouts.header')

<link rel="stylesheet" href="{{ asset('css/artl.css') }}">


</head>
<body>
@include('layouts.nav')



</div>
<div class="jumbotron">
  
    <div id="black"></div>

  </div>
<section class="carrier">
 

  <div class="container">
      <div class="artl-row row">
         
            <div class="col-md-9">
                <div class="artl-wrapper">
                @forelse($posts as $post)
                  <div class="artlc-card">
                    <div class="meta">
                      <div class="photo" style="background-image: url(./asset/daretobelieve.png)"></div>
                      
                    </div>
                    <div class="description">
                      <h1>{{ ucfirst($post->title) }}</h1>
                      <h4>By {{ ucfirst($post->posted_by) }}</h4>
                      <p>{!! $post->body !!}</p>
                     <ul class="details">
                        <li class="date">{{ ucfirst($post->created_at) }}</li>
                      </ul> <p class="read-more">
                        <a href="/articles/{{ $post->id }}">Read More...</a>
                      </p>
                    </div>
                  </div>
                  @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
             </div>
          </div>
          <div class="col-md-3">
            <div class="artl-recent-wrapper">
              <h5>Popular post</h5>
              <ul>
              
               <li><a href="#"></a></li>
              
              </ul>
            
         </div>
      </div>
      </div>
      
  </div>

</section>

  @include('layouts.footer')
</body>
</html>
