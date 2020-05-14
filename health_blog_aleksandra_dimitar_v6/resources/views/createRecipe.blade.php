<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
</head>
@extends('layouts.app')

@section('app-layout')
    @parent
   <div class="wrapper">
<input type="text" name="" id="" placeholder="Recipe Name">
<textarea type="text" name="" id="" placeholder="Description"></textarea>

<button>Create</button>


   </div>
@endsection

