<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/recipeInfo.css') }}" >
    <link rel="stylesheet" href="/css/app.css">
</head>

@extends('layouts.app')

@section('app-layout')
    @parent
   <div class="wrapper">

    <div class="recipe_toolbar">
        <h1>{{$recipe->recipe_name}}</h1>
      

        <div class="action_buttons_wrapper">
            <a class="btn btn-outline-dark" href="/user/recipes/edit/{{$recipe->id}}">
                EDIT
            </a>
            <a class=" btn btn-outline-danger" href="/user/recipes/delete/{{$recipe->id}}">
                DELETE
            </a>
        </div>
      
    </div>
  
       <div class="image_container">
        <img class="" src="" alt="image">
       </div>
     
     <h2>General Information</h2>
     <p>recipe_id: {{$recipe->id}} </p>
     <h2>Description</h2>
   
   <p>{{$recipe->description}}</p>
   </div>
@endsection

