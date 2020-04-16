<!-- BLOG -->
<section id="blog" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">
 
              <div class="col-md-12 col-sm-12">
                   <div class="section-title">
                        <h2>Our Blog</h2>
                        <span class="line-bar">...</span>
                   </div>
              </div>

              @foreach ($blogs as $blog)
                  
              <div class="col-md-6 col-sm-6">
                   <!-- BLOG THUMB -->
                   <div class="media blog-thumb">
                        <div class="media-object media-left">
                             <a href="blog-detail.html"><img src="{{asset('storage/'.$blog->img)}}" class="img-responsive" alt=""></a>
                        </div>
                        <div class="media-body blog-info">
                             <small><i class="fa fa-clock-o"></i> December 22, 2017</small>
                             <h3><a href="blog-detail.html">{{$blog->titre}}</a></h3>
                             <p>{{$blog->description}}</p>
                             <a href="blog-detail.html" class="btn section-btn">Read article</a>
                        </div>
                   </div>
              </div>
              @endforeach

              
              
         </div>
    </div>
</section>