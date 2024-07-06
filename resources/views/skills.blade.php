@extends('layout')

@section('title', 'Skills')

@section('content')
    <h1>{{ $title }}</h1>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
@endsection
