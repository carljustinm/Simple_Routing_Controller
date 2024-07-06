<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            background-color:  #9fbff5;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .welcome-container {
            text-align: center;
            background-color: #fff;
            padding: 50px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
        .welcome-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .welcome-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Carl Justin Masedman's Portfolio</h1>
        <p>Please click the button below to explore more.</p>
        <a href="{{ route('about.me') }}" class="welcome-button">Enter</a>
    </div>
</body>
</html>
