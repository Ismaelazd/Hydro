@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit skill </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container">
    
    <form action="{{route('skill.update',$skill)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group text-darka ">
            <label class="h3" for="name ">Nom :</label>
            <input value="{{$skill->name}}" type="text" name="name"
                class="form-control @error('name') is-invalid @enderror" id="name">
            @error('name')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">Nombre :</label> <br>
            <input value="{{$skill->nombre}}" type="nombre" name="nombre"
                class="form-control @error('nombre') is-invalid @enderror"  id="nombre">
            @error('nombre')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/users.css">
@stop

@section('js')
   
@stop