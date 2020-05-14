@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
    <p>This is the current user:</p>
    {{-- <p>{{auth()->user()}}</p> --}}
    
    <form method="POST" action="/user/profile/edit/{{auth()->user()->id}}">
        @csrf
        @method('PUT')

        <textarea name="name">Name: {{auth()->user()-> name}}</textarea>
        <button> UPDATE</button>
    </form>
    
        <textarea> Id: {{auth()->user()->id}}</textarea>
        <textarea>Email: {{auth()->user()->email}}</textarea>
        <textarea>Name: {{auth()->user()-> name}}</textarea>
        <textarea>Created at: {{auth()->user()->created_at}}</textarea>
   </div>
@endsection

