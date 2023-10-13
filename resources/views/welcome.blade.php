<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <title>Claudio</title>
    </head>
    <body>
        <div class="navigationBar">
            <h1>Claudio</h1>
            <div class="navigationBar-Content">
                <button>Home</button>
                <button id="aboutBtn">About</button>
                <button id="skillBtn">Skills</button>
                <button id="projectBtn">Projects</button>
                <button id="contactBtn">Contact</button>
            </div>
        </div>

        <div class="profileBox">
            <div class="profileContainer">
                <div class="profileDisplayer">
                    <div>
                        <span>Hello There</span><br />
                        <span class="profileName">My Name is Claudio,<br />a Computer Science Major Student at Bina Nusantara University</span>
                    </div>
                    <img src="{{ asset('picture/Face.jpg') }}" alt="">
                </div>
            </div>
        </div>

        
        <div class="menuContainer">
            <div class="menuDiv" data-aos="fade-up">
                <div class="menuContentDiv">
                    <p class="menuHeader">About Me</p>
                    <p class="menuContent">
                        Hello, I'm Claudio Januar Aristan, currently a Computer Science major student at Bina Nusantara University, embarking on my fifth semester. <br /><br />

                        My passion lies in the world of Web Development, where I'm proficient in HTML, CSS, React, PHP, and JavaScript. Beyond the web, I'm well-versed in languages such as C, C#, Python, and Java, and skilled in working with databases, including MongoDB and SQL. <br /><br />

                        In addition to my technical skills, I dabble in Artificial Intelligence and basic Game Development. I'm also multilingual, fluently conversant in both Indonesian and English, and I'm making strides in learning Chinese. <br /><br />

                        My aspiration extends beyond academia, as I'm eager to explore knowledge beyond the classroom and contribute to the world of Computer Science. Let's connect and collaborate to push the boundaries of our field!
                    </p>
                </div>
            </div>
    
            <span id="skillLabel"></span><br />
            <div class="menuDiv" data-aos="fade-up" id="aboutLabel">
                <div class="menuContentDiv">
                    <p class="menuHeader">Skills</p>
                    <div class="menuContent-Cell">
                        <div class="menuContent-Cell-Row">
                            <div class="menuContent-Cell-Item">
                                HTML<br /><br />
                                <img src="{{ asset('picture/html-pic.png') }}" alt="">
                            </div>

                            <div class="menuContent-Cell-Item">
                                CSS<br /><br />
                                <img src="{{ asset('picture/css-pic.png') }}" alt="">
                            </div>

                            <div class="menuContent-Cell-Item">
                                JS<br /><br />
                                <img src="{{ asset('picture/js-pic.png') }}" alt="">
                            </div>
                        </div>

                        <div class="menuContent-Cell-Row">
                            <div class="menuContent-Cell-Item">
                                Python<br /><br />
                                <img src="{{ asset('picture/python-pix.png') }}" alt="">
                            </div>

                            <div class="menuContent-Cell-Item">
                                Java<br /><br />
                                <img src="{{ asset('picture/java-pic.png') }}" alt="">
                            </div>

                            <div class="menuContent-Cell-Item">
                                React<br /><br />
                                <img src="{{ asset('picture/react-pic.png') }}" alt="">
                            </div>
                        </div>

                        <div class="menuContent-Cell-Row">
                            <div class="menuContent-Cell-Item">
                                C#<br /><br />
                                <img src="{{ asset('picture/csharp-pic.png') }}" alt="">
                            </div>

                            <div class="menuContent-Cell-Item">
                                PHP<br /><br />
                                <img src="{{ asset('picture/php-pic.png') }}" alt="">
                            </div>

                            <div class="menuContent-Cell-Item">
                                Laravel<br /><br />
                                <img src="{{ asset('picture/laravel-pic.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <span id="projectLabel"></span><br />
            <div class="menuDiv" data-aos="fade-up">
                <div class="menuContentDiv">
                    <p class="menuHeader">Projects</p>
                    <p class="menuContent">
                        Link : <a href="https://github.com/ClaudioJA" class="githubLink">GitHub</a>
                    </p>
                    <div class="menuContent-Cell">
                        <div class="menuContent-Cell-Row">
                            <div class="projectContent-Cell-Item">
                                <img src="{{ asset('picture/novelupdates-pic.png') }}" alt=""><br />
                                <span class="projectContent-Name">Novel Updates Replica (MERN)</span><br />
                                <span class="projectContent-Link">
                                    <a href="https://github.com/ClaudioJA/Novel-Updates-Replica" target="_blank">Code</a>
                                </span>
                            </div>

                            <div class="projectContent-Cell-Item">
                                <img src="{{ asset('picture/nusama-pic.png') }}" alt=""><br />
                                <span class="projectContent-Name">Nusama (ASP.Net)</span><br />
                                <span class="projectContent-Link">
                                    <a href="https://github.com/ClaudioJA/Nusama" target="_blank">Code</a>
                                </span>
                            </div>
                        </div>

                        <div class="menuContent-Cell-Row">
                            <div class="projectContent-Cell-Item">
                                <img src="{{ asset('picture/crud-pic.png') }}" alt=""><br />
                                <span class="projectContent-Name">Product System (ASP.Net)</span><br />
                                <span class="projectContent-Link">
                                    <a href="https://github.com/ClaudioJA/SampleQuestion" target="_blank">Code</a>
                                </span>
                            </div>

                            <div class="projectContent-Cell-Item">
                                <img src="{{ asset('picture/nusama-pic.png') }}" alt=""><br />
                                <span class="projectContent-Name">Portofolio Website (Laravel)</span><br />
                                <span class="projectContent-Link">
                                    <a href="https://github.com/ClaudioJA/" target="_blank">Code</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <span id="contactLabel"></span><br />
            <div class="menuDiv" data-aos="fade-up">
                <div class="menuContentDiv">
                    <p class="menuHeader">Contact Me</p>
                    <div class="menuContent-Cell">
                        <div class="contactContainer-Row">
                            <div class="contactContainer">
                                <a href="https://www.linkedin.com/in/claudio-aristan/">
                                    <img src="{{ asset('picture/linkedin-pic.png') }}" alt="">
                                </a>
                            </div>

                            <div class="contactContainer">
                                <a href="https://www.github.com/ClaudioJA">
                                    <img src="{{ asset('picture/github-pic.png') }}" alt="">
                                </a>
                            </div>

                            <div class="contactContainer">
                                <a href="https://www.instagram.com/claudio_0701/">
                                    <img src="{{ asset('picture/instagram-pic.png') }}" alt="">
                                </a>
                            </div>

                            <div class="contactContainer">
                                <a href="mailto:student.cja@gmail.com">
                                    <img src="{{ asset('picture/mail-pic.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

    </body>
</html>
