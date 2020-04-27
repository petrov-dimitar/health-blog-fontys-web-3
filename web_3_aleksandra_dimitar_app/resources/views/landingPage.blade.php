@extends('layouts.app')

@section('title', 'Page Title')

@section('toolbar')
    @parent

    <p>This is appended to the master toolbar.</p>
@endsection



@section('content')
    <p>This is my body content.</p>
@endsection