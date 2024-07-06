<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        body {
            background-color: #eee4f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
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
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
        }
        nav a.active {
            background-color: #007bff;
            color: #fff;
        }
        nav a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .content {
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            border: 2px solid #007bff;
            border-radius: 10px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <header>
        Carl Justin Masedman
    </header>
    <nav>
        <a href="{{ route('about.me') }}" class="{{ request()->is('about-me') ? 'active' : '' }}">About Me</a>
        <a href="{{ route('skills') }}" class="{{ request()->is('skills') ? 'active' : '' }}">Skills</a>
        <a href="{{ route('hobbies') }}" class="{{ request()->is('hobbies') ? 'active' : '' }}">Hobbies</a>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
