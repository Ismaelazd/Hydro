@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Section About</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container my-5 ">

        @foreach ($abouts as $about)
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
                  <div class="d-flex w-100 justify-content-between">
                    <div class="">

                        <strong>{{$skill->name}}</strong>
                        <span class="pull-right mx-3">{{$skill->nombre}}%</span>
                             <div class="progress ">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{$skill->nombre}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->nombre}}%;"></div>
                              </div>
                    </div>
                          <a class="text-warning mx-3" title="Edit skill" href="{{route('skill.edit',$skill)}}"><i class="fa-2x fas fa-pencil-alt"></i></a>
                  </div>
                  
                  @endforeach
                      

                 </div>
            </div>

            <div class="col-md-4 col-sm-12">
                 
                 <div class="about-image">
                      <img src="{{asset('storage/'.$about->img)}}" class="img-responsive" alt="">
                 </div>
            </div>
            <div class="d-flex justify-content-center w-100 my-4">
                <a class="btn btn-outline-dark mx-3" href="{{route('about.edit',$about)}}">Edit About</a>
                <form action="{{route('about.destroy',$about)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger mx-3" type="submit" href="">Delete About</button>

                </form>
           </div>
       </div>
            
        @endforeach
       

    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/body.css">
<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css">

@stop

@section('js')
   
@stop