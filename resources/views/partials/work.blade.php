<!-- WORK -->
<section id="work" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <div class="section-title">
                        <h2>Our work</h2>
                        <span class="line-bar">...</span>
                   </div>
              </div>

              @foreach ($works as $work)
                  
              <div class="col-md-3 col-sm-6">
                   <!-- WORK THUMB -->
                   <div class="work-thumb">
                        <a href="{{asset('storage/'.$work->img)}}" class="image-popup">
                             <img src="{{asset('storage/'.$work->img)}}" class="img-responsive" alt="Work">

                             <div class="work-info">
                                  <h3>{{$work->titre}}</h3>
                                  <small>{{$work->categorie}}</small>
                             </div>
                        </a>
                   </div>
              </div>
              @endforeach


         </div>
    </div>
</section>