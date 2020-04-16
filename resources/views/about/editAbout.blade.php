@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit about</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container">
    
    <form action="{{route('about.update',$about)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group text-darka ">
            <label class="h3" for="description ">description :</label>
            <input value="{{$about->description}}" type="text" name="description"
                class="form-control @error('description') is-invalid @enderror" id="description">
            @error('description')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3" for="description2">2ème description :</label> <br>
            <input value="{{$about->description2}}" type="text" name="description2"
                class="form-control @error('description2') is-invalid @enderror" id="description2">
            @error('description2')
            <div class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        <div class="form-group text-darka ">
            <label class="h3  " for="img">Image :</label> <br>
            <input class="form-control" value="@if($errors->first('img'))@else{{old('img')}}@endif"
            type="file" name="img" class=" @error('img') is-invalid @enderror" id="img" >
            @error('img')
                <div  class="alert alert-danger">{{  $message  }}</div>
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
    <link rel="stylesheet" href="/css/abouts.css">
@stop

@section('js')
   
@stop