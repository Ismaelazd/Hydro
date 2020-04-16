@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Section work</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    
<section id="work" data-stellar-background-ratio="0.5">
    <div class="container">
         
        <div class="row">
        
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
                   <div class="d-flex justify-content-center align-items-center my-3">
                    <a class="btn btn-outline-dark mx-3" href="{{route('work.edit',$work)}}">Edit Work</a>
                    <form action="{{route('work.destroy',$work)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger mx-3" type="submit" href="">Delete Work</button>
     
                    </form>
                   </div>
              </div>
              @endforeach


         </div>
    </div>
</section>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/body.css">
<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css">

@stop

@section('js')
   
@stop