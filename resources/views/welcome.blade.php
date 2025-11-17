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

    <hr>

    <main>
        <section id="education">
            <div class="container">
                <h1 style="">Education</h1>
                <div class="grid">
                    <article class="card">
                        <h2>SSC</h2>
                        <hr class="eduHr">
                        <p>Institute: Panirchara Adarsha High School</p>
                        <p>Subject: Science</p>
                        <p>Session: 2017-2018</p>
                        <p>CGPA: 3.94</p>
                    </article>
                    <article class="card">
                        <h2>HSC</h2>
                        <hr class="EduHr">
                        <p>Institute: Cox's Bazar City College</p>
                        <p>Subject: Science</p>
                        <p>Session: 2020-2021</p>
                        <p>CGPA: 4.25</p>
                    </article><article class="card">
                        <h2>B.Sc</h2>
                        <hr class="EduHr">
                        <p>Institute: Daffodil International University</p>
                        <p>Subject: Computer Science and Engineering</p>
                        <p>Session: 2022-2026</p>
                        <p>Current CGPA: 3.5</p>
                    </article>
                </div>
            </div>
        </section>

        <hr>

        <section id="activity">
            <div class="container">
                <h1>Activity</h1>
                <div class="grid">
                    <article class="card">
                        <h3>Project / Club</h3>
                        <p>Role • Date</p>
                        <p>What you did, impact, tech used.</p>
                    </article>
                    <article class="card">
                        <h3>Hackathon / Event</h3>
                        <p>Result • Date</p>
                        <p>Key contribution and outcome.</p>
                    </article>
                </div>
            </div>
        </section>

        <hr>

        <section id="certificate">
            <div class="container">
                <h2>Certificates</h2>
                <div class="grid">
                    <article class="card">
                        <h3>Certificate Name</h3>
                        <p>Issuer • Month Year</p>
                        <p><a href="#">View credential</a></p>
                    </article>
                    <article class="card">
                        <h3>Another Certificate</h3>
                        <p>Issuer • Month Year</p>
                        <p><a href="#">View credential</a></p>
                    </article>
                </div>
            </div>
        </section>

        <hr>

        <section id="skills">
            <div class="container">
                <h2>Skills</h2>
                <div class="grid">
                    <article class="card">
                        <h3>Languages</h3>
                        <p>PHP, JavaScript, Python, C++</p>
                    </article>
                    <article class="card">
                        <h3>Frameworks</h3>
                        <p>Laravel, Vue/React, Tailwind</p>
                    </article>
                    <article class="card">
                        <h3>Tools</h3>
                        <p>Git, MySQL, Docker, Postman</p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>© {{ date('Y') }} Tahin. All rights reserved.</p>
        </div>
    </footer>

    {{-- Optional: highlight active link on scroll (small, dependency-free) --}}
    <script>
        const links = document.querySelectorAll('.nav-links a');
        const sections = [...document.querySelectorAll('main section, header#home')];
        const byId = id => document.getElementById(id);
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    links.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id));
                }
            });
        }, { rootMargin: '-40% 0px -55% 0px', threshold: 0 });
        sections.forEach(s => observer.observe(s));
    </script>

</body>
</html>
