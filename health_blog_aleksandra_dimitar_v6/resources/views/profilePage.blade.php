

@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
    <p>This is the current user:</p>
    <a href="profile/edit">edit</a>
    {{-- <p>{{auth()->user()}}</p> --}}
    <img src=`{{$image['photo_name']}}` alt="photo">

   <img src='{{'http://localhost:8000/root' . $image['photo_name']}}' alt="Actual Photo">
    <p>{{$image['photo_name']}}</p>
        <p> Id: {{auth()->user()->id}}</p>
        <p>Email: {{auth()->user()->email}}</p>
        <p>Name: {{auth()->user()-> name}}</p>
        <p>Created at: {{auth()->user()->created_at}}</p>
   </div>
@endsection

