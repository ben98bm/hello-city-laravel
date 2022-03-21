@extends('layouts/base', ['title' => 'About Us'])

<!-- @section('title', 'About Us |'. config('app.name')) -->


@section('content')
    <img src="{{ asset('/images/IMG_2475.jpg') }}" alt="capiung" class="my-12 rounded-full shadow-md h-32">

    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by les teachers du net.
    </h2>

    <p>
        <a href="{{ route('home') }}" class="text-indigo-500
                hover:text-indigo-600 underline">
            Revenir à la page d'acceuil</a>
    </p>

@endsection