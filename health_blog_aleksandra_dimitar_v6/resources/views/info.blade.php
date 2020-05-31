<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/landingPage.css') }}" > --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUIyJ" crossorigin="anonymous"> --}}
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    
</head>
<body>
    @extends('layouts.app')

@section('title', 'Page Title')

@section('toolbar')
    @parent

    {{-- <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpillsa.com%2Fwp-content%2Fuploads%2F2019%2F05%2FHealthy-lifestyle-tips.jpeg&f=1&nofb=1" alt=""> --}}
@endsection



@section('content')

<div class="description_text">
    @if ($message ?? '')
    <div class="alert alert-danger" role="alert">
        {{$message ?? '' }}
      </div>                

@endif
    <a href="{{ url('/users/export/') }}" class="btn btn-success">Export all users to excel</a>
</div>


@endsection
</body>


</html>
