@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
    <p>This is the current user:</p>
    {{-- <p>{{auth()->user()}}</p> --}}
    
    
        <p> Id: {{auth()->user()->id}}</p>
        <p>Email: {{auth()->user()->email}}</p>
        <p>Name: {{auth()->user()-> name}}</p>
        <p>Created at: {{auth()->user()->created_at}}</p>

        <form method="POST" action="/user/profile/edit/{{auth()->user()->id}}">
        @csrf
        @method('PUT')

        <textarea name="name">Name: {{auth()->user()-> name}}</textarea>
        <button> UPDATE</button>
    </form>
   </div>
@endsection

