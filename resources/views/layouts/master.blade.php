<html>
    <head>
        <title>kamilplhh - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
        @vite('resources/css/app.css')
    </head>
    <body>
        @vite('resources/js/app.js')
        @section('sidebar')
        <div class="sidenav-top">
            <p id="clock"></p>
            <i class="fa-solid fa-clock fa-sm" style="padding-right: 0.5vw; padding-top: 1.6vh"></i>            
            <div class="sidenav-bot">
                <i id="fake" class="fa-solid fa-bars-staggered fa-bounce fa-xl"></i>
                <div id="links">
                    <a href="/Projects">Projects</a>                   
                    <a href="/">About</a>
                    <a href="/CV">Partial CV</a>
                    <a href="https://github.com/Kamilplhh" target="_blank"><i class="fa-brands fa-github" style="padding-top: 2vh"></i></a>
                    <a href="https://www.instagram.com/kamil_plhh/" target="_blank"><i class="fa-brands fa-instagram" style="padding-top: 0.3vh"></i></a>
                    <a id="discord"><i class="fa-brands fa-discord" style="padding-top: 0.3vh"></i>  </a>
                </div> 
            </div> 
        </div>     
        @show
        
        <div class="m-container">

            <h1 class="typer"><span id="typed"></span></h1>

            <div class="content">
                @yield('content')
                <div id="contact">
                    <div id="contact-left">
                        <img id="pfp" src="https://static.vecteezy.com/system/resources/previews/004/343/259/original/cute-puppy-or-dog-cartoon-illustration-animal-raising-hand-wildlife-icon-design-concept-isolated-flat-face-style-free-vector.jpg" alt="Me">
                    </div>
                    <div id="contact-top">
                        Hi! 😎<br>
                        Do you like what you see?</h6>
                    </div>
                    <div id="contact-bot">                      
                        <a href="/Contact">Contact</a> with me
                    </div>                   
                </div>
            </div>   

            <div class="footer">
                <div id="circle">
                    <i id="logo" class="fa-regular fa-id-card fa-beat-fade fa-xl"></i>
                </div>               
            </div>
        </div>
    </body>
</html>