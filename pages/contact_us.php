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
        <div class="mmm">
            <div class="mmm_r">
                
                    <div>
                        <button class="ibutton" onclick=" window.open('https://instagram.com/eddie_btz?igshid=OGQ5ZDc2ODk2ZA==','_blank')">
                            <img class="normal" src = "../images/icons/insta.png" alt="Instagram">
                        </button>
                    </div>
                    <div style="margin:10;">
                        <button class="ibutton" onclick=" window.open('https://open.spotify.com/user/4tszupm5da5e81bkdjvcedrcw?si=78514fa38e8b478c','_blank')">
                            <img class="normal" src = "../images/icons/spoti.webp" alt="Spotify">
                        </button>
                    </div>
                    <div style="margin: 10;">
                        <button class="ibutton" onclick=" window.open('https://www.linkedin.com/in/edward-prescott-decie-552584263','_blank')">
                            <img class="normal" src= "../images/icons/linkedin.png" alt="LinkedIn">
                        </button>
                    </div>
                    <div style="margin: 10;">
                        <button class="ibutton" onclick=" window.open('https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDMhTMlqJGLhQXGTsrTWFgsmbfzpHvlVSCwjrXQvmvdNPpqbmhFGjPPtWgjcfhgXFzLB','_blank')">
                            <img class="special" src = "../images/icons/gmail.png" alt="Gmail">
                        </button>
                    </div>
                    <div style="margin: 10;">
                        <button class="ibutton" onclick=" window.open('https://twitter.com/DecieEddie','_blank')">
                            <img class="normal" src = "../images/icons/twit.png" alt="Twitter">
                        </button>
                    </div>
            </div>
            <div class="mmm_l">
                <h1 style="text-align: center;">Contact Us!</h1>
                <h1 style="text-align: center;">-------------</h1>
                <p> </p>
                <ul style="color: white; font-size: 1vw; font-family: monospace;">
                    <li>phone number: +961 76 476 846</li>
                    <p> </p>
                    <li>email address: eddie_support@gmail.com</li>
                    <p> </p>
                    <li>office locations:
                        <p> </p>
                        <ul>
                            <li>Mar Mikhael Bldg. 153</li>
                            <p> </p>
                            <li>Zalka Rue 62, Bldg. 28</li>
                            <p> </p>
                            <li>Saida Maral St. Bldg. 357</li>
                            <p> </p>
                        </ul>
                    </li>
                    <li>office working hours:
                        <p> </p>
                        <ul>
                            <li>Mar Mikhael: 9AM - 4PM</li>
                            <p> </p>
                            <li>Zalka: 8AM - 8PM</li>
                            <p> </p>
                            <li>Saida: 8AM - 8PM</li>
                        </ul>
                    </li>
                </ul>
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

        </body>
</html>