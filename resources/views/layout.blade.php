<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        nav {
            margin: 20px 0;
            text-align: center;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #007bff;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        Carl Justin Masedman
    </header>
    <nav>
        <a href="{{ route('about.me') }}">About Me</a>
        <a href="{{ route('skills') }}">Skills</a>
        <a href="{{ route('hobbies') }}">Hobbies</a>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
