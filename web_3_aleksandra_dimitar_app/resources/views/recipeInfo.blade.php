@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
   <h1>{{$recipe->id}} {{$recipe->recipe_name}}</h1>
   <p>{{$recipe->description}}</p>
   </div>
@endsection

