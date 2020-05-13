@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
@foreach ($recipes as $recipe)
<ul>
    <li>
    <a href="recipes/{{$recipe->id}}">{{$recipe->recipe_name}}</a>
    </li>
</ul>

@endforeach
    
   </div>
@endsection

