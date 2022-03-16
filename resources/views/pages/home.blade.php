@extends('base')

<!-- @section('title', 'Hello City') -->


@section('content')
    <h1>Hello from senegal</h1>

    <p>Il est actuellement {{ date('h:i A')}}.</p>
@endsection