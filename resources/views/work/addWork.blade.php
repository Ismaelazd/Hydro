@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Add work</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container">
    
    <form action="{{route('work.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group text-darka ">
            <label class="h3" for="titre">Titre :</label> <br>
            <input value="" type="text" name="titre"
                class="form-control @error('titre') is-invalid @enderror" id="titre">
            @error('titre')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="categorie">Catégorie :</label> <br>
            <input value="" type="text" name="categorie"
                class="form-control @error('categorie') is-invalid @enderror" id="categorie">
            @error('categorie')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3  " for="img">Image :</label> <br>
            <input class="form-control" value=""
            type="file" name="img" class=" @error('img') is-invalid @enderror" id="img" >
            @error('img')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Ajouter</button>
        </div>

    </form>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/abouts.css">
@stop

@section('js')
   
@stop