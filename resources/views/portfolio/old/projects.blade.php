<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
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

<section class="projects">
    <h2>My Projects</h2>
    <div class="project-item">
        <h3>Project 1: Web Application</h3>
        <p>Description of the project goes here.</p>
    </div>
    <div class="project-item">
        <h3>Project 2: E-Commerce Site</h3>
        <p>Description of the project goes here.</p>
    </div>
</section>

<footer>
    <p>&copy; 2025 Your Name. All Rights Reserved.</p>
</footer>

</body>
</html>
