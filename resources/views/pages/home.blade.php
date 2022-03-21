@extends('layouts.base' , ['title' => 'Hello Country'])


@section('content')

    <img src="/images/IMG_2475.jpg" alt="images" class="rounded shadow-md h-32">
    <h1 class="mt-5 text-3xl sm:text-5xl text-indigo-600">Hello from senegal</h1>

    <p class="text-lg text-red-800">Il est actuellement {{ date('h:i A')}}.</p>
@endsection