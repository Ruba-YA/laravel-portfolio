@include('layout.header')
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name">Ruba</p>
            <span>.</span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="#home" class="nav-link active-link">Home</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="{{ url('#about') }}" class="nav-link">About</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="{{ url('#projects') }}" class="nav-link">Projects</a>

                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="{{ url('#contact') }}" class="nav-link">Contact</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
        </div>
        <div class="nav-menu-btn">
            <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>


    <main class="wrapper">
       <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="featured-text-card">
                <span>Ruba alabsi</span>
            </div>
            <div class="featured-name">
                <p>I am <span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
                <p>Experienced frontend developer with a passion for creating visually stunning
                   and user-friendly websites.
                </p>
            </div>
            <div class="featured-text-btn">
                <button class="btn blue-btn">Hire Me</button>
                <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
            </div>
            <div class="social_icons">
                <div class="icon"><i class="uil uil-instagram"></i></div>
                <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
                <div class="icon"><i class="uil uil-dribbble"></i></div>
                <div class="icon"><i class="uil uil-github-alt"></i></div>
            </div>
          </div>
          {{--  <!-- <div class="featured-image">
            <div class="image">
                <img src="public/images/flame-tap.gif" alt="avatar" height="50" width="50">
            </div>
          </div> -->  --}}
          <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
                <i class="uil uil-mouse-alt"></i>
                <p>Scroll Down</p>
            </a>
          </div>

       </section>
       <!-- -------------- ABOUT BOX ---------------- -->
       <section class="section" id="about">
          <div class="top-header">
            <h1>About Me</h1>
          </div>
          <div class="row">
            <div class="col">
                <div class="about-info">
                    <h3>My introduction</h3>
                    <p>I am well-versed in HTML, CSS , JavaScript and PHP , and other cutting edge
                       frameworks  like Laravel, which allows me to implement interactive features.
                       Additionally, I have experirence working with content management systems (CMS) like
                       WordPress.
                    </p>
                    <div class="about-btn">
                        <button class="btn">Download CV <i class="uil uil-import"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Frontend</h3>
                    </div>
                    <div class="skills-list">
                        <span>HTML</span>
                        <span>CSS</span>
                    
                        <span>JavaScript</span>
          
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Backend</h3>
                    </div>
                    <div class="skills-list">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>Flutter</span>
                        <span>WordPress</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Database</h3>
                    </div>
                    <div class="skills-list">
                        <span>MySQL</span>
                        <span>MongoDB</span>
                        <span>Sqflite</span>
                    </div>
                </div>
            </div>
          </div>
       </section>
       <!-- -------------- PROJECT BOX ---------------- -->
       <section class="section" id="projects">
        <div class="top-header">
            <h1>Projects</h1>
        </div>
@if($projects->count())
<div class="project-container">
@foreach ($projects as $project)

@include('layout.projects',['project'=>$project])


@endforeach
</div>
@else
<p>Posts yet</p>
@endif

</div>
</section>
       <!-- -------------- CONTACT BOX ---------------- -->

       <section class="section" id="contact">
          <div class="top-header">
            <h1>Get in touch</h1>
            <span>Do you have a project in your mind, contact me here</span>
          </div>
          <div class="row">
             <div class="col">
                <div class="contact-info">
                    <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                    <p><i class="uil uil-envelope"></i> Email: eng.rubaalabsi@gmail.com</p>
                    <p><i class="uil uil-phone"></i> Tel: +967779213490</p>
                </div>
             </div>
             <div class="col">
                <div class="form-control">
                    <div class="form-inputs">
                        <input type="text" class="input-field" placeholder="Name">
                        <input type="text" class="input-field" placeholder="Email">
                    </div>
                    <div class="text-area">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="form-button">
                        <button class="btn">Send <i class="uil uil-message"></i></button>
                    </div>
                </div>
             </div>
          </div>
       </section>

    </main>


    <!-- --------------- FOOTER --------------- -->
    <footer>
        <div class="top-footer">
            <p>Ruba Alabsi .</p>
        </div>
        <div class="middle-footer">
            <ul class="footer-menu">
                <li class="footer_menu_list">
                    <a href="#home">Home</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#about">About</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#projects">Projects</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="footer-social-icons">
            <div class="icon"><i class="uil uil-instagram"></i></div>
            <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
            <div class="icon"><i class="uil uil-dribbble"></i></div>
            <div class="icon"><i class="uil uil-github-alt"></i></div>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; <a href="#home" style="text-decoration: none;">Ruba Alabsi </a> - All rights reserved</p>
        </div>
    </footer>

    </div>




    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

       <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="/app.js"></script>
</body>
</html>