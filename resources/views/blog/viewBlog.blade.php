@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Section Blog</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    
<!-- BLOG -->
<section id="blog" data-stellar-background-ratio="0.5">
    <div class="container">
         @foreach ($blogs as $blog)
         <div class="row my-3">
     
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
              <div class=" col-md-6 col-sm-6 d-flex justify-content-center align-items-center">
               <a class="btn btn-outline-dark mx-3" href="{{route('blog.edit',$blog)}}">Edit Blog</a>
               <form action="{{route('blog.destroy',$blog)}}" method="post">
                   @csrf
                   @method('DELETE')
                   <button class="btn btn-outline-danger mx-3" type="submit" href="">Delete Blog</button>

               </form>
              </div>
     
          </div>
          @endforeach
    </div>
</section>
@stop 

@section('css')

<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="/css/body.css">
<link rel="stylesheet" href="/css/admin_custom.css">


@stop

@section('js')
   
@stop