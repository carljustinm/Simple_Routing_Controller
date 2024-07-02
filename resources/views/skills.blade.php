<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    <a href="{{ route('about.me') }}">About Me</a>
    <a href="{{ route('skills') }}">Skills</a>
    <a href="{{ route('hobbies') }}">Hobbies</a>
</body>
</html>
