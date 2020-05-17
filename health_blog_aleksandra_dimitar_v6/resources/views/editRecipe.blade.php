@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
    <p>This is the selected recipe to edit:</p>
    {{-- <p>{{auth()->user()}}</p> --}}
    
    <form method="POST" action="/user/recipes/update/{{$recipe->id}}">
        @csrf
        @method('PUT')
        <input name="recipe_name" placeholder="Name: {{$recipe->recipe_name}}">
        <input name="description" placeholder="Description: {{$recipe->recipe_name}}">
        <button> UPDATE</button>
    </form>
    
    
    
   </div>
@endsection

