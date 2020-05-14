<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/landingPage.css') }}" >
    <title>Document</title>
    
</head>
<body>
    @extends('layouts.app')

@section('title', 'Page Title')

@section('toolbar')
    @parent

    {{-- <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpillsa.com%2Fwp-content%2Fuploads%2F2019%2F05%2FHealthy-lifestyle-tips.jpeg&f=1&nofb=1" alt=""> --}}
@endsection



@section('content')



@endsection
</body>
</html>
