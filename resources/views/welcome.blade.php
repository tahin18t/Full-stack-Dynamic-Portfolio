<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tahin | Portfolio</title>

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



    <!-- <div id="string" style="width: 100%; height: 100px; background-color: red;">
        <svg width="100%" height="100px">
            <path id="string-path" d="M 0 100 Q 500 100 1000"
            stroke="black" stroke-width="4" fill="transparent"/>
        </svg>
    </div> -->



    <main>
        <section id="education">
            <div class="container">
                <h1>Education</h1>
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
                    </article>
                    <article class="card">
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

        <section id="certificate">
            <div class="container">
                <h2>Certificates</h2>
                <div class="grid">
                    <article class="card">
                        <h3>Full Stack Web Development With JavaScript</h3>
                        <p>OSTAD | December, 2024</p>
                        <p><a href="https://drive.google.com/file/d/1gmU-xbgsjddMrWSsSeOQMO_kGAsT06Ct/view?usp=drive_link">View certificate</a></p>
                    </article>
                    <article class="card">
                        <h3>AWS Academy Graduate - AWS Academy Machine Learning Foundations</h3>
                        <p>AWS • September, 2025</p>
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
                    <article class="card skill-item">
                        <h3>Languages</h3>
                        <p>C, C++, Java, Python, JavaScript, NodeJS, PHP</p>
                    </article>
                    <article class="card skill-item">
                        <h3>Frameworks</h3>
                        <p>Vue/React, Tailwind, Bootstrap, ExpressJS, Laravel</p>
                    </article>
                    <article class="card skill-item">
                        <h3>Database</h3>
                        <p>MySQL, MongoDB</p>
                    </article>
                    <article class="card skill-item">
                        <h3>Tools</h3>
                        <p>Git, Postman, Figma</p>
                    </article>
                    <article class="card skill-item">
                        <h3>Core Concept:</h3>
                        <p>OOP, Data Structure, Algirithm, Problem Solving, Critical Thinking</p>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>