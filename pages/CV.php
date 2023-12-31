<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <div style="width: 75%; height: 260; margin-bottom: 10; padding-left: 20; padding-top: 10;">
            <div class = "div1">
                <img src="../images/imgs/me.png" alt="me" style="border-radius: 50%;" width = "250px" height="250px">
            </div>
            <div class = "personal_statement">
                <h1>Personal Statement</h1>
                <p style="padding-left: 20;">I am seeking experience on the field and involvement <br>in the real-life
                    applications of my double major <br>in mathematics and computer science</p>
                <h1>Personal Information</h1>
                <ul style="color: white; padding-left:50; font-family: monospace;">
                    <li>357 Mountazah St.</li>
                    <li>Mansourieh, Mount Lebanon</li>
                    <li>(+961) 76 476 846</li>
                    <li>eddie.presdec@gmail.com</li>
                </ul>
            </div>
        </div>
        <div style="position: relative; display: inline-block; width: 75%; height: 550;">
            <div style="position: absolute; left: 0; top: 0; width: 49%;  height: 61%; border-style: dotted; border-color: #07192c; background-color: #42576c;">
                <h1>Education</h1>
                <h2>University - LAU Beirut (2021-)</h2>
                <p class="phelp">Level: Undergraduate</p>
                <p class="phelp">Degrees: Mathematics and Computer Science (Double Major)</p>
                <p class="phelp">Current GPA: 3.89</p>
                <p class="phelp">Honors: Computer Science</p>
                <p></p>
                <h2>School - Brummana High School(2007-2021)</h2>
                <p class="phelp">Curriculum: IB</p>
                <ul style="color: white; padding-left: 50; font-family: monospace;">
                    <li>Rank: 1</li>
                    <li>Total Grade: 42/45</li>
                    <li>Courses: HL AA Mathematics, HL Economics, HL Physics, <br>SL Chemistry, SL French, SL English Literature</li>
                </ul>
                <p class="phelp">Curriculum: IGCSE</p>
                <ul style="color: white; padding-left: 50; font-family: monospace;">
                    <li> Courses: English Literature (A*), Mathematics (A*), <br>
                        Biology (A*), Physics (A*), Chemistry (A*), French (C)
                    </li>
                </ul>
            </div>

            <div style="position: absolute; bottom: 0; left: 0; width: 49%; height: 35%; border-style: dotted; border-color: #07192c; background-color: #17599b;">
                <h1>Skills</h1>
                <ul style="color: white; padding-left: 50; font-family: monospace;">
                    <li>Leadership</li>
                    <li>Problem Solving</li>
                    <li>Organization and Planning</li>
                    <li>Task Delegation</li>
                    <li>Time Management</li>
                </ul>
            </div>

            
                <div style="position: absolute; top: 0; right: 0; width: 49%; height:45%;  border-style: dotted; border-color: #07192c; background-color: #17599b;">
                    <h1>Experience</h1>
                    <h2>Scouts - 13 years</h2>
                    <p class="phelp">Scout Leader for boy scouts ages 11 to 16 (2021-)</p>
                    <p class="phelp">Ventures Band Leader and Scouts Patrol Leader</p>
                    <p class="phelp">Organized sports events with teams across Lebanon</p>
                    <p class="phelp">Organized and implemented multiple camps and events</p>
                    <h2>Podcast - 2 years</h2>
                    <p class="phelp">Hosted an interview-based podcast</p>
                    <p class="phelp">Worked on organization, social media promotion,</p>
                    <p class="phelp">video/audio/image editing</p>
                </div>
                <div style="position: absolute; right: 0; bottom: 0; height: 51%; width: 49%; border-style: dotted; border-color: #07192c;  background-color: #42576c;">
                    <h1>Projects</h1>
                    <h2>Dinner With JayZ</h2>
                    <p class="phelp">A database for a restaurant where you can </p>  
                    <p class="phelp">eat alongside celebrities</p>
                    <p class="phelp">Worked on the design and implementation of a restaurant</p>
                    <p class="phelp">Used Oracle DBMS with SQL language</p>
                    <h2>Kabasna</h2>
                    <p class="phelp">An app to easily finding trips and events across Lebanon</p>
                    <p class="phelp">Used MySQL for the backend database</p>
                    <p class="phelp">Used NetBeans for the frontend computer application</p>
                    <p class="phelp">Used Flutter for the frontend mobile application</p>
                </div>
            
            
        </div>
        
        <div class="menu1">
            <div class = "container">
                <a href="home.php">
                    <img src = "../images/icons/home.png" alt="Home" width="274" height="52">
                </a>
            </div>

            <div class = "container">
                <a href="contact_us.php">
                    <img src = "../images/icons/sports.png" alt="Sports" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="gallery.php">
                    <img src = "../images/icons/hobbies.png" alt="Hobbies" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="CV.php">
                    <img src = "../images/icons/CV.png" alt="CV" width="274" height="52">
                </a>
            </div>
            <div class = "container">Welcome: <?php echo $_SESSION["username"]; ?>!&nbsp;&nbsp;&nbsp;</div>
            <div class = "container"><a href="../index.php">Sign Out</a>&nbsp;&nbsp;&nbsp;</div>
        </div>

        <div class="div_ibutton">
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://instagram.com/eddie_btz?igshid=OGQ5ZDc2ODk2ZA==','_blank')">
                    <img src = "../images/icons/insta.png" alt="Instagram" width="50" height="50">
                </button>
            </div>
            <div style="margin:10;">
                <button class="ibutton" onclick=" window.open('https://open.spotify.com/user/4tszupm5da5e81bkdjvcedrcw?si=78514fa38e8b478c','_blank')">
                    <img src = "../images/icons/spoti.webp" alt="Spotify" width="50" height="50">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://www.linkedin.com/in/edward-prescott-decie-552584263','_blank')">
                    <img src = "../images/icons/linkedin.png" alt="LinkedIn" width="50" height="50">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDMhTMlqJGLhQXGTsrTWFgsmbfzpHvlVSCwjrXQvmvdNPpqbmhFGjPPtWgjcfhgXFzLB','_blank')">
                    <img src = "../images/icons/gmail.png" alt="Gmail" width="50" height="38">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://twitter.com/DecieEddie','_blank')">
                    <img src = "../images/icons/twit.png" alt="Twitter" width="50" height="50">
                </button>
            </div>
        </div>
        
    </body>
</html>