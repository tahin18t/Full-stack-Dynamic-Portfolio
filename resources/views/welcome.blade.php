<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tahin | Portfolio</title>

    {{-- Preferred: serve your CSS via Laravel's asset helper --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <nav class="navbar">
        <div class="container nav-inner">
            <div class="logo">
                <h1>Tahin18t</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#activity">Activity</a></li>
                <li><a href="#certificate">Certificate</a></li>
                <li><a href="#skills">Skills</a></li>
            </ul>
        </div>
    </nav>

    <header id="home">
        <div class="container hero">
            <div class="heroInfo">
                <h1 class="title">Hi, I'm <span>Tahin ...</span></h1>
                <span class="subtitle">Problem Solver    ||    Web Developer</p>
                <p class="summary">Motivated MERN stack developer with strong programming and problem-solving skills. Seeking a 
developer role to contribute to efficient website management and deliver impactful, high-quality software 
solutions.</p>
                <div class="cta">
                    <a class="btn primary" href="#certificate">View Certificates</a>
                    <a class="btn" href="#skills">See Skills</a>
                </div>
            </div>
            <div class="heroImg">
                <img id="heroImg" src="{{ asset('image/hero.jpg') }}" alt="">
            </div>
        </div>
    </header>
</body>
</html>
