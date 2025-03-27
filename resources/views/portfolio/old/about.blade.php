<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/projects') }}">Projects</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="about">
    <h2>About Me</h2>
    <p>Hello! I am a passionate web developer, skilled in creating beautiful and responsive websites. I specialize in front-end technologies and back-end development with Laravel.</p>
</section>

<footer>
    <p>&copy; 2025 Your Name. All Rights Reserved.</p>
</footer>

</body>
</html>
