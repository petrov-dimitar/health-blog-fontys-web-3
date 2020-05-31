@extends('layouts.app')

@section('app-layout')
    @parent
   <div>
    <p>This is the selected recipe to edit:</p>
    {{-- <p>{{auth()->user()}}</p> --}}
    
    <form method="POST" action="/user/recipes/update/{{$recipe->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input name="recipe_name" placeholder="Name: {{$recipe->recipe_name}}">
        <input name="description" placeholder="Description: {{$recipe->recipe_name}}">

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

