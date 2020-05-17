<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
</head>
@extends('layouts.app')

@section('app-layout')
    @parent
   <div class="wrapper">

    <form method="POST" action="/user/createRecipe">

        @csrf
        @method('POST')

        <input type="text" name="recipe_name" id="recipe_name" placeholder="Recipe Name">
        <textarea type="text" name="description" id="description" placeholder="Description"></textarea>
        
        <button>Create</button>
    </form>



   </div>
@endsection

