@extends('layouts.app')

@section('app-layout')
    @parent
   <div class="wrapper">
       <a href="/user/recipes/create">Create Recipe</a>
@foreach ($recipes as $recipe)
<ul>
    <li>
    <a href="recipes/{{$recipe->id}}">{{$recipe->recipe_name}}</a>
    </li>
</ul>

@endforeach
    
   </div>
@endsection

