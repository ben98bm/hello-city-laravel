@extends('base')


@section('content')

    <img src="/images/patrouille.jpg" alt="images">
    <h1>Hello from senegal</h1>

    <p>Il est actuellement {{ date('h:i A')}}.</p>
@endsection