<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" >
    <link rel="stylesheet" href="/css/app.css">
</head>
@extends('layouts.app')

@section('app-layout')
    @parent
    <div class="toolbar_actions">
        <h1>Recipes</h1>
        <a class="link_recipes btn btn-primary" href="/user/recipes/create">Create New +</a>
    </div>
   <div class="wrapper">

    

      
@foreach ($recipes as $recipe)


<div class="card" style="">
<img class="avatar" src='{{'http://localhost:8000/root' . $recipe->photo_name}}' alt="Actual Photo">
    <div class="card-body">
      <h5 class="card-title">{{$recipe->recipe_name}}</h5>
      <p class="card-text">{{$recipe->description}}</p>
      <a class="link_recipes btn btn-outline-info" href="recipes/{{$recipe->id}}">Read Recipe</a>
    </div>
  </div>

@endforeach
    
   </div>
@endsection

