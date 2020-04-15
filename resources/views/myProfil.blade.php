@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">My Profil </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="uicard ">

        <div class="fon">
            <img src="{{asset('storage/bg.jpg')}}">
        </div>

        <div class="user text-center">
            <img src="{{asset('storage/avatar.jpeg')}}">
            <p>{{$user->name}}</p>
        </div>
        <div class="socialinfo ">
            <div class="socialtext1 d-flex flex-column justify-content-start align-items-center text-center">
                <p>Email :</p>
                <p class="m-0 px-3">{{$user->email}}</p>
                
            </div>

            <div class="socialtext2 d-flex flex-column justify-content-start align-items-center text-center">
                <p>Role :</p>
                <p>{{$user->role->role}}</p>
                
            </div>

           
        </div>
        <div class="icon-block mt-2">

            <a href="{{route('MyProfil.edit',$user->id)}}"><i
                    class="fa fa-pencil"></i></a>
            {{-- @if ($user->id != 1)

            <form action="{{route('MyProfil.destroy',$user->id)}}" method="post">
                @csrf
                @method('DELETE')
            <a href=""> <i class="fas fa-trash-alt"></i></a>
            </form>
            @endif --}}
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/users.css">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.css">
@stop

@section('js')
   
@stop