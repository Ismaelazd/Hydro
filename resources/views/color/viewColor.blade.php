@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Color Background</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container my-5 ">

       
       <div class="row">
           @foreach ($colors as $color)
               <div class="col-4 my-4 text-center text-white">
                <div class=" {{$color->color}} p-5">
                    {{$color->color}}
                </div>
                <input type="radio" name="color" class="my-3 " id="color" >
               </div>
           
           @endforeach
       </div>

    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="/css/color.css">
@stop

@section('js')
   
@stop