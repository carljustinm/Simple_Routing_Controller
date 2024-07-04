@extends('layout')

@section('title', 'Hobbies')

@section('content')
    <h1>{{ $title }}</h1>
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
@endsection
