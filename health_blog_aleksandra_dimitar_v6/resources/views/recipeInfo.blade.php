<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/recipeInfo.css') }}" >
</head>

@extends('layouts.app')

@section('app-layout')
    @parent
   <div class="wrapper">

    <div class="recipe_toolbar">
        <h1>{{$recipe->id}} {{$recipe->recipe_name}}</h1>
      

        <div class="action_buttons_wrapper">
            <a class="" href="/user/recipes/edit/{{$recipe->id}}">
                EDIT
            </a>
            <a class="delete" href="/user/recipes/delete/{{$recipe->id}}">
                DELETE
            </a>
        </div>
      
    </div>
   
       <div class="image_container">
        <img class="" src="" alt="image">
       </div>
     
   

   <p>{{$recipe->description}}</p>
   </div>
@endsection

