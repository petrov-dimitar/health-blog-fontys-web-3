@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
   <h1>RESPONSE: {{$response ?? ''}}</h1>
    <p>This is the current user:</p>
    {{-- <p>{{auth()->user()}}</p> --}}
    
    
        <p> Id: {{auth()->user()->id}}</p>
        <p>Email: {{auth()->user()->email}}</p>
        <p>Name: {{auth()->user()-> name}}</p>
        <p>Created at: {{auth()->user()->created_at}}</p>

        <form method="POST" action="/user/profile/edit/{{auth()->user()->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <textarea name="name">Name: {{auth()->user()-> name}}</textarea>

        
        <div class="container">
          
            <br>
            <div class="row justify-content-center">
            <div class="col-md-8">
         
            <div class="file-field">
            <div class="row">
            <div class=" col-md-8 mb-4">
            <img id="original" src="" class=" z-depth-1-half avatar-pic" alt="">
            <div class="d-flex justify-content-center mt-3">
            <div class="btn btn-mdb-color btn-rounded float-left">
            <input type="file" name="photo_name" id="photo_name" required=""> <br>
            <button type="submit" class="btn btn-secondary d-flex justify-content-center mt-3">submit</button>
            </div>
            </div>
            </div>
            <div class=" col-md-4 mb-4">
            <img id="thumbImg" src="" class=" z-depth-1-half thumb-pic"
            alt="">
            </div>
            </div>
        

            
            </div>
            </div>
            </div>
   </div>

  
        <button> UPDATE</button>
    </form>
   </div>
@endsection

