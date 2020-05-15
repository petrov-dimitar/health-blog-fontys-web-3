<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" >
</head>
@extends('layouts.app')

@section('app-layout')
    @parent
    <div class="toolbar_actions">
        <h1>Recipes</h1>
        <a class="link_recipes" href="/user/recipes/create">Create New +</a>
    </div>
   <div class="wrapper">

    

      
@foreach ($recipes as $recipe)
<ul class="card">
    <div class="recipe_toolbar_title">
        <h2>{{$recipe->recipe_name}}</h2>
    </div>
    <span class="image_container">
        <img src="" alt="image">
    </span>

<p>{{$recipe->description}}</p>
    <li>
    <a class="link_recipes" href="recipes/{{$recipe->id}}">Read Recipe</a>
    </li>
</ul>

@endforeach
    
   </div>
@endsection

