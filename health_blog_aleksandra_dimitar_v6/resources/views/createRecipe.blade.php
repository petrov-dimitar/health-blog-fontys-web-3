<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
</head>
@extends('layouts.app')

@section('app-layout')
    @parent
   <div class="wrapper">

    <form method="POST" action="/user/createRecipe" enctype="multipart/form-data">

        @csrf
        @method('POST')

        <input type="text" name="recipe_name" id="recipe_name" placeholder="Recipe Name">
        <textarea type="text" name="description" id="description" placeholder="Description"></textarea>

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
        
        <button>Create</button>
    </form>



   </div>
@endsection

