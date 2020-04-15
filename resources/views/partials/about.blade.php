<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">

              <div class="col-md-5 col-sm-6">
                   <div class="about-info">
                            
                        <div class="section-title">
                             <h2>Let us introduce</h2>
                             <span class="line-bar">...</span>
                        </div>
                        <p>{{$about->description}}</p>
                        <p>{{$about->description2}}</p>
         
                   </div>
              </div>

              <div class="col-md-3 col-sm-6">
                   <div class="about-info skill-thumb">

                    @foreach ($skills as $skill)
                    <strong>{{$skill->name}}</strong>
                    <span class="pull-right">{{$skill->nombre}}%</span>
                         <div class="progress">
                              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                         </div>
                    @endforeach
                        

                   </div>
              </div>

              <div class="col-md-4 col-sm-12">
                   
                   <div class="about-image">
                        <img src="{{asset('storage/'.$about->img)}}" class="img-responsive" alt="">
                   </div>
              </div>
              
         </div>
    </div>
</section>