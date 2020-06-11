<head>
  
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/userProfile.css') }}" >
</head>

@extends('layouts.app')

@section('app-layout')
    @parent


   <div class="wrapper">
    <h1>Profile Page</h1>


    <a class="btn btn-outline-dark" href="profile/edit">
        EDIT
    </a>
   


        <img class="avatar" src='{{'http://localhost:8000/root' . auth()->user()->photo_name}}' alt="Actual Photo">

 

        <div class="info-container">
            <div class="info-left">
 
                <p> Id:</p>
                <p>Email: </p>
                <p>Name: </p>
                <p>Created at:</p>
               </div>
            
               <div class="info-right">
                    <p> [{{auth()->user()->id}}]</p>
                    <p>{{auth()->user()->email}}</p>
                    <p>{{auth()->user()->name}}</p>
                    <p>{{auth()->user()->created_at}}</p>
            </div>
        </div>
   

   </div>




@endsection

